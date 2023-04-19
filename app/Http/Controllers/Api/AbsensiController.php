<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

// Resource
use App\Http\Resources\AbsensiResource;

// Model
use App\Models\Tblabsensi;
use Illuminate\Http\Request;
use App\Models\Tblsiswa;

// Any
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Session\Session;
// use Illuminate\Session\Session;

class AbsensiController extends Controller
{
    // Index
    public function index()
    {
        try {
            //get posts
            $posts = Tblabsensi::paginate(50);

            //return collection of posts as a resource
            return new AbsensiResource(true, 'Data Absensi Siswa', $posts);
        } catch (\Exception $e) {
            return new AbsensiResource(false, 'Gagal mengambil data', $e->getMessage());
        }
    }

    // Show Detail
    public function show($noreg)
    {
        $siswa = Tblabsensi::where('noreg', $noreg)->first();

        if ($siswa) {
            //return single siswa as a resource
            return new AbsensiResource(true, 'Data Absensi Siswa Ditemukan!', $siswa);
        } else {
            //return error response
            return new AbsensiResource(false, 'Data Absendi Siswa Tidak Ditemukan!', null);
        }
    }

    //Store
    public function store(Request $request)
    {
        try {
            // Define validation rules
            $validator = Validator::make($request->all(), [
                'tgltransaksi' => 'datetime',
                'tglabsen' => 'required|date',
            ], [
                'tglabsen.required' => 'Tanggal absen harus diisi.',
                'tglabsen.date' => 'Format tanggal absen tidak valid.',
            ]);

            // Check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            // Cek apakah siswa ada dalam database
            $siswa = Tblsiswa::where('noreg', $request->noreg)->first();
            if (!$siswa) {
                return response()->json(['message' => 'Siswa tidak ditemukan'], 404);
            }

            // Create Data
            $post = Tblabsensi::create([
                'tgltransaksi' => Carbon::now()->toDateTimeString(),
                'tglabsen' => Carbon::now()->toDate(),
                'noreg' => $siswa->noreg,
                'nama' => $siswa->nama,
                'kelas' => $siswa->kelas,
                'nmkelas' => $siswa->nmkelas,
                'semester' => $siswa->semester,
                'thajaran' => $siswa->thnpelajaran,
                // Bisa diperbaiki sesuai tergantung pengimplementasian
                'time_in' => Carbon::now()->toTimeString(),
                'time_out' => $request->time_out ?? 0,
                'picture_in' => $request->picture_in ?? 0,
                'picture_out' => $request->picture_out ?? 0,
                //
                'hadir' => ($request->ijin ?? 0) == 1 || ($request->sakit ?? 0) == 1 || ($request->alpha ?? 0) == 1 ? 0 : 1,
                'ijin' => $request->ijin ?? 0,
                'sakit' => $request->sakit ?? 0,
                'alpha' => $request->alpha ?? 0,
                'pulang' => $request->pulang ?? 0,
                'ket' => $request->ket ?? 0,
                'userx' => $request->userx ?? 0,
                'acc' => $request->acc ?? 'Y',
                'tglacc' => now()->toDateString(),
                'nmacc' => $request->nmacc ?? 'Y',
                'lokasi' => $request->lokasi ?? 1,
                'latitude_longtitude_in' => $request->latitude_longtitude_in ?? 0,
                'latitude_longtitude_out' => $request->latitude_longtitude_out ?? 0,
            ]);

            // Store user data in session
            $request->session()->put('user', $post);
            // return response
            return new AbsensiResource(true, 'Data Absensi Siswa Berhasil Ditambahkan!', $post);
        } catch (\Exception $e) {
            return new AbsensiResource(false, 'Gagal menambah data', $e->getMessage());
        }
    }
}
