<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

// Resource
use App\Http\Resources\Absensi\AbsensiResource;

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
        $siswa = Tblabsensi::where('noreg', $noreg)->paginate(10);

        if ($siswa) {
            //return single siswa as a resource
            return new AbsensiResource(true, 'Data Absensi Siswa Ditemukan!', $siswa);
        } else {
            //return error response
            return new AbsensiResource(false, 'Data Absendi Siswa Tidak Ditemukan!', null);
        }
    }



    //Store
    // public function store(Request $request)
    // {
    //     try {
    //         // Define validation rules
    //         $validator = Validator::make($request->all(), [
    //             'time_in' => 'datetime',
    //             'time_in' => 'required|date',
    //         ], [
    //             'time_in.required' => 'Tanggal absen harus diisi.',
    //             'time_in.date' => 'Format tanggal absen tidak valid.',
    //         ]);

    //         // Check if validation fails
    //         if ($validator->fails()) {
    //             return response()->json($validator->errors(), 422);
    //         }

    //         // Cek apakah siswa ada dalam database
    //         $siswa = Tblsiswa::where('noreg', $request->noreg)->first();
    //         if (!$siswa) {
    //             return response()->json(['message' => 'Siswa tidak ditemukan'], 404);
    //         }

    //         // Create Data
    //         $post = Tblabsensi::create([
    //             'tgltransaksi' => Carbon::now()->toDateTimeString(),
    //             'tglabsen' => Carbon::now()->toDate(),
    //             'noreg' => $siswa->noreg,
    //             'nama' => $siswa->nama,
    //             'kelas' => $siswa->kelas,
    //             'nmkelas' => $siswa->nmkelas,
    //             'semester' => $siswa->semester,
    //             'thajaran' => $siswa->thnpelajaran,
    //             'time_in' => Carbon::now()->toTimeString(),
    //             'time_out' => $request->time_out ?? 0,
    //             'picture_in' => $request->picture_in ?? 0,
    //             'picture_out' => $request->picture_out ?? 0,
    //             'hadir' => ($request->ijin ?? 0) == 1 || ($request->sakit ?? 0) == 1 || ($request->alpha ?? 0) == 1 ? 0 : 1,
    //             'ijin' => $request->ijin ?? 0,
    //             'sakit' => $request->sakit ?? 0,
    //             'alpha' => $request->alpha ?? 0,
    //             'pulang' => $request->pulang ?? 0,
    //             'ket' => $request->ket ?? 0,
    //             'userx' => $request->userx ?? 0,
    //             'acc' => $request->acc ?? 'Y',
    //             'tglacc' => now()->toDateString(),
    //             'nmacc' => $request->nmacc ?? 'Y',
    //             'lokasi' => $request->lokasi ?? 1,
    //             'latitude_longtitude_in' => $request->latitude_longtitude_in ?? 0,
    //             'latitude_longtitude_out' => $request->latitude_longtitude_out ?? 0,
    //         ]);

    //         // Store user data in session
    //         $request->session()->put('user', $post);
    //         // return response
    //         return new AbsensiResource(true, 'Gagal menambah data!', $post);
    //     } catch (\Exception $e) {
    //         return new AbsensiResource(false, 'Data Absensi Siswa Berhasil Ditambahkan!', $e->getMessage());
    //     }
    // }

    public function store(Request $request)
    {
        // Define variable $late with initial value false
        $late = false;

        try {
            // Define validation rules
            $validator = Validator::make($request->all(), [
                'time_in' => 'datetime',
                'time_in' => 'required|date',
                'time_in' => 'required|unique',
            ], [
                'time_in.required' => 'Tanggal absen harus diisi.',
                'time_in.date' => 'Format tanggal absen tidak valid.',
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

            // Check if it's past 07:45
            $now = Carbon::now();
            $now_time = $now->toTimeString();
            $hadir_time = Carbon::parse('07:45:00');
            $late_time = '00:00'; // Set default value to 00:00

            if ($now_time > $hadir_time->toTimeString()) {
                // Calculate late time in minutes
                $late_in_minutes = $hadir_time->diffInMinutes($now);
                // Convert late time to HH:MM format
                $hours = str_pad(floor($late_in_minutes / 60), 2, '0', STR_PAD_LEFT);
                $minutes = str_pad($late_in_minutes % 60, 2, '0', STR_PAD_LEFT);
                $late_time = "$hours:$minutes";
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
                'time_in' => Carbon::now()->toTimeString(),
                'time_out' => $request->time_out ?? 0,
                'terlambat' => $late_time,
                'picture_in' => $request->picture_in ?? 0,
                'picture_out' => $request->picture_out ?? 0,
                'hadir' => ($request->ijin ?? 0) == 1 || ($request->sakit ?? 0) == 1 || ($request->alpha ?? 0) == 1 ? 0 : 1,
                'ijin' => $request->ijin ?? 0,
                'sakit' => $request->sakit ?? 0,
                'alpha' => $request->alpha ?? 0,
                'pulang' => $request->pulang ?? 0,
                'ket' => $request->ket ?? 0,
                'userx' => $siswa->nama,
                'acc' => $request->acc ?? 'Y',
                'tglacc' => now()->toDateString(),
                'nmacc' => $request->nmacc ?? 'Aplikasi',
                'lokasi' => $request->lokasi ?? 1,
                'latitude_longtitude_in' => $request->latitude_longtitude_in ?? 0,
                'latitude_longtitude_out' => $request->latitude_longtitude_out ?? 0,
            ]);
            dd($post);

            // Store user data in session
            $request->session()->put('user', $post);
            // return response
            return new AbsensiResource(true, 'Gagal menambah data!', $post);
        } catch (\Exception $e) {
            return new AbsensiResource(false, 'Data Absensi Siswa Berhasil Ditambahkan!', $e->getMessage());
        }
    }


    //Pulang
    public function update(Request $request, $id)
    {
        try {
            // Retrieve the absensi data by id
            $absensi = Tblabsensi::findOrFail($id);

            // Validate time_out input
            $validator = Validator::make($request->all(), [
                'time_out' => 'required|date_format:H:i:s',
            ], [
                'time_out.required' => 'Waktu keluar harus diisi.',
                'time_out.date_format' => 'Format waktu keluar tidak valid. Contoh format yang benar: 17:30:00.',
            ]);

            // If validation fails, return response with error messages
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            // Update the time_out value
            $absensi->time_out = $request->time_out;
            $absensi->save();

            // Return response with success message
            return new AbsensiResource(true, 'Data absensi berhasil diupdate!', $absensi);
        } catch (\Exception $e) {
            // If there's an error, return response with error message
            return new AbsensiResource(false, 'Gagal mengupdate data absensi!', $e->getMessage());
        }
    }

}
