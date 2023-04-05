<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Model
use App\Models\Tblpesertadidik;
use App\Models\TblGuru;
use App\Models\Tblpegawai;

// Resources
use App\Http\Resources\PesertaDidikResource;
use App\Http\Resources\GuruResource;
use App\Http\Resources\PegawaiResource;

// Any
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Session\Session;

class PegawaiController extends Controller
{
    // Index
    public function index()
    {
        try {
            //get posts
            $posts = Tblpegawai::paginate(50);

            //return collection of posts as a resource
            return new PegawaiResource(true, 'Data Guru', $posts);
        } catch (\Exception $e) {
            return new PegawaiResource(false, 'Gagal mengambil data', $e->getMessage());
        }
    }


    // Show Detail
    public function show($kdguru)
    {
        $Guru = Tblpegawai::where('kdguru', $kdguru)->first();

        if ($Guru) {
            //return single Guru as a resource
            return new PegawaiResource(true, 'Data Guru Ditemukan!', $Guru);
        } else {
            //return error response
            return new PegawaiResource(false, 'Data Guru Tidak Ditemukan!', null);
        }
    }


    //Store
    public function store(Request $request, Session $session)
    {
        try {
            // define validation rules
            $validator = Validator::make($request->all(), [
                'kdguru' => 'required',
                'nmpegawai' => 'required',
                'nip' => 'required',
                'alpegawai' => 'required',
                'telp' => 'required',
                'jabatan' => 'required',
            ]);

            // check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            // Create Data
            $post = Tblpegawai::create([
                'kdguru' => $request->kdguru,
                'nmpegawai' => $request->nmpegawai,
                'nip' => $request->nip,
                'alpegawai' => $request->alpegawai,
                'telp' => $request->telp,
                'jabatan' => $request->jabatan,
                'deviceid' => $request->deviceid ?? 0,
                'groupacc' => $request->groupacc ?? 'TIDAK',
                'accabsen' => $request->accabsen ?? 'TIDAK',
                'acckurikulum' => $request->acckurikulum ?? 'TIDAK',
                'viewsiswa' => $request->viewsiswa ?? 'limit',
                'status' => $request->status ?? 'AKTIF',
            ]);

            // return response
            return new PegawaiResource(true, 'Data Guru Berhasil Ditambahkan!', $post);
        } catch (\Exception $e) {
            return new PegawaiResource(false, 'Gagal menambah data', $e->getMessage());
        }
    }


    // Update
    public function update(Request $request, $kdguru)
    {
        try {
            // Find the Guru to be updated
            $Guru = Tblpegawai::where('kdguru', $kdguru)->first();

            // Check if the Guru exists
            if (!$Guru) {
                return new PegawaiResource(false, 'Data Guru Tidak Ditemukan!', null);
            }

            // Define validation rules
            $validator = Validator::make($request->all(), []);

            // Check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            // Update the Guru
            $data = $request->only([
                'nama' => $request->nama,
                'kdguru' => $request->kdguru,
                'nmpegawai' => $request->nmpegawai,
                'nip' => $request->nip,
                'alpegawai' => $request->alpegawai,
                'telp' => $request->telp,
                'jabatan' => $request->jabatan,
                'deviceid' => $request->deviceid,
                'groupacc' => $request->groupacc,
                'accabsen' => $request->accabsen,
                'acckurikulum' => $request->acckurikulum,
                'viewsiswa' => $request->viewsiswa,
                'status' => $request->status,
            ]);
            $Guru->update($data);

            // Return response
            return new PegawaiResource(true, 'Data Guru Berhasil Diubah!', $Guru);
        } catch (\Exception $e) {
            return new PegawaiResource(false, 'Gagal mengubah data', $e->getMessage());
        }
    }


    public function destroy($kdguru)
    {
        try {
            $Guru = Tblpegawai::where('kdguru', $kdguru)->first();
            if ($Guru) {
                //delete Guru
                $Guru->delete();

                //return response
                return new PegawaiResource(true, 'Data Guru Berhasil Dihapus!', null);
            } else {
                //return error response
                return new PegawaiResource(false, 'Data Guru Tidak Ditemukan!', null);
            }
        } catch (\Exception $e) {
            return new PegawaiResource(false, 'Gagal menghapus data', $e->getMessage());
        }
    }
}
