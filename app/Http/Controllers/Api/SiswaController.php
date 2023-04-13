<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Model
use App\Models\Tblpesertadidik;
use App\Models\Tblsiswa;

// Resources
use App\Http\Resources\PesertaDidikResource;
use App\Http\Resources\SiswaResource;

// Any
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Session\Session;

class SiswaController extends Controller
{
    // Index
    public function index()
    {
        try {
            //get posts
            $posts = Tblsiswa::paginate(50);

            //return collection of posts as a resource
            return new SiswaResource(true, 'Data Siswa', $posts);
        } catch (\Exception $e) {
            return new SiswaResource(false, 'Gagal mengambil data', $e->getMessage());
        }
    }


    // Show Detail
    public function show($noreg)
    {
        $siswa = Tblsiswa::where('noreg', $noreg)->first();

        if ($siswa) {
            //return single siswa as a resource
            return new SiswaResource(true, 'Data Siswa Ditemukan!', $siswa);
        } else {
            //return error response
            return new SiswaResource(false, 'Data Siswa Tidak Ditemukan!', null);
        }
    }

    //Store
    public function store(Request $request, Session $session)
    {
        try {
            // define validation rules
            $validator = Validator::make($request->all(), [
                // 'nis'          => 'required',
                'nama'         => 'required',
                'alamat'       => 'required',
                'gender'       => 'required',
                'kelas'        => 'required',
                'nmkelas'      => 'required',
                'semester'     => 'required',
                'thnpelajaran' => 'required',
            ]);

            // check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            // generate noreg value
            $thn = substr($request->thnpelajaran, 0, 4);
            $lastSiswa = Tblsiswa::orderBy('noreg', 'desc')->first();
            if ($lastSiswa) {
                $noreg = $thn . sprintf('%06d', intval(substr($lastSiswa->noreg, 4)) + 1);
            } else {
                $noreg = $thn . '000001';
            }

            // generate foto otomatis
            $photo = $request->hasFile('photo') ? $request->file('photo')->store('public/photos') : 'public/storage/user.png';

            // Create Data
            $post = Tblsiswa::create([
                'noreg'        => $noreg,
                'nis'          => $noreg,
                'nama'         => $request->nama,
                'alamat'       => $request->alamat,
                'hpsiswa'      => $request->hpsiswa,
                'hportu'       => $request->hportu,
                'gender'       => $request->gender,
                'kelas'        => $request->kelas,
                'nmkelas'      => $request->nmkelas,
                'semester'     => $request->semester,
                'thnpelajaran' => $request->thnpelajaran,
                'statusx'      => $request->statusx ?? 1,
                'protek'       => $request->protek ?? 'Y',
                'opsi'         => $request->opsi ?? 'M',
                'cek'          => $request->cek ?? 'N',
                'deviceid'     => $request->deviceid ?? 1,
                'password'     => Hash::make($request->password ?? 'password'),
                'created_login' => $request->created_login ?? Carbon::now(),
                'created_cookies' => $request->created_cookies ?? $session->getId(),
                'photo'        => $photo,
                'idlokasi'     => $request->idlokasi ?? 1,
                'pengurus'     => $request->pengurus ?? 1,
            ]);
            // Store user data in session
            $request->session()->put('user', $post);
            // return response
            return new SiswaResource(true, 'Data Siswa Berhasil Ditambahkan!', $post);
        } catch (\Exception $e) {
            return new SiswaResource(false, 'Gagal menambah data', $e->getMessage());
        }
    }

    // Update
    public function update(Request $request, $noreg)
    {
        try {
            // Find the siswa to be updated
            $siswa = Tblsiswa::where('noreg', $noreg)->first();

            // Check if the siswa exists
            if (!$siswa) {
                return new SiswaResource(false, 'Data Siswa Tidak Ditemukan!', null);
            }

            // Define validation rules
            $validator = Validator::make($request->all(), []);

            // Check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            $data = $request->only([
                'noreg'        => $noreg,
                'nis'          => $noreg,
                'nama'         => $request->nama,
                'alamat'       => $request->alamat,
                'hpsiswa'      => $request->hpsiswa,
                'hportu'       => $request->hportu,
                'gender'       => $request->gender,
                'kelas'        => $request->kelas,
                'nmkelas'      => $request->nmkelas,
                'semester'     => $request->semester,
                'thnpelajaran' => $request->thnpelajaran,
                'statusx'      => $request->statusx,
                'protek'       => $request->protek,
                'opsi'         => $request->opsi,
                'cek'          => $request->cek,
                'deviceid'     => $request->deviceid,
                'password'     => Hash::make($request->password),
                'photo'        => $request->photo,
                'idlokasi'     => $request->idlokasi,
                'pengurus'     => $request->pengurus,
            ]);

            if (!$request->session()->has('user')) {
                // return notifikasi harus login ulang
                return new SiswaResource(false, 'Anda harus login ulang!', null);
            }
            // Update the siswa
            $siswa->update($data);

            // Return response
            return new SiswaResource(true, 'Data Siswa Berhasil Diubah!', $siswa);
        } catch (\Exception $e) {
            return new SiswaResource(false, 'Gagal mengubah data', $e->getMessage());
        }
    }


    public function destroy($noreg)
    {
        try {
            $siswa = Tblsiswa::where('noreg', $noreg)->first();
            if ($siswa) {
                //delete siswa
                $siswa->delete();

                //return response
                return new SiswaResource(true, 'Data Siswa Berhasil Dihapus!', null);
            } else {
                //return error response
                return new SiswaResource(false, 'Data Siswa Tidak Ditemukan!', null);
            }
        } catch (\Exception $e) {
            return new SiswaResource(false, 'Gagal menghapus data', $e->getMessage());
        }
    }
}
