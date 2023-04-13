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
    public function store(Request $request, Session $session)
    {
        try {
            // Define validation rules
            $validator = Validator::make($request->all(), [
                // 'tgltransaksi' => 'datetime',
                // 'tglabsen' => 'required|date',
                // 'semester' => 'required|int',
                // // 'time_in' => 'required|time',
                // // 'time_out' => 'required|time',
                // 'hadir' => 'required|int',
                // 'ijin' => 'required|int',
                // 'sakit' => 'required|int',
                // 'alpha' => 'required|int',
                // 'pulang' => 'required|int',
            ], [
                // 'tglabsen.required' => 'Tanggal absen harus diisi.',
                // 'tglabsen.date' => 'Format tanggal absen tidak valid.',
                // 'hadir.required' => 'Field hadir harus diisi.',
                // 'ijin.required' => 'Field ijin harus diisi.',
                // 'sakit.required' => 'Field sakit harus diisi.',
                // 'alpha.required' => 'Field alpha harus diisi.',
                // 'pulang.required' => 'Field pulang harus diisi.',
                // 'tglacc.required' => 'Tanggal acc harus diisi.',
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
                'created_login' => $request->created_login ?? Carbon::now(),
                'created_cookies' => $request->created_cookies ?? $session->getId(),
                'time_in' => Carbon::now()->toTimeString(), // Menggunakan fungsi toTimeString() untuk mengambil waktu saat ini
                'time_out' => $request->time_out,
                'picture_in' => $request->picture_in,
                'picture_out' => $request->picture_out,
                'hadir' => $request->hadir ?? 1,
                'ijin' => $request->ijin ?? 0,
                'sakit' => $request->sakit ?? 0,
                'alpha' => $request->alpha ?? 0,
                'pulang' => $request->pulang ?? 0,
                'ket' => $request->ket,
                'userx' => $request->userx,
                'acc' => $request->acc ?? 'Y',
                'tglacc' => now()->toDateString(),
                // 'tglacc' => now()->toDateString(),
                'nmacc' => $request->nmacc ?? 'Y',
                'lokasi' => $request->lokasi ?? 1,
                'latitude_longtitude_in' => $request->latitude_longtitude_in,
                'latitude_longtitude_out' => $request->latitude_longtitude_out,
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
