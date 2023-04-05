<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Model
use App\Models\Tblpesertadidik;
use App\Models\TblGuru;
use App\Models\Tblpegawai;
use App\Models\Tblkelas;

// Resources
use App\Http\Resources\PesertaDidikResource;
use App\Http\Resources\GuruResource;
use App\Http\Resources\PegawaiResource;
use App\Http\Resources\KelasResource;

// Any
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Session\Session;

class KelasController extends Controller
{
    // Index
    public function index()
    {
        try {
            //get posts
            $posts = Tblkelas::paginate(50);

            //return collection of posts as a resource
            return new KelasResource(true, 'Data Kelas', $posts);
        } catch (\Exception $e) {
            return new KelasResource(false, 'Gagal mengambil data', $e->getMessage());
        }
    }


    // Show Detail
    public function show($idkelas)
    {
        $Kelas = Tblkelas::where('idkelas', $idkelas)->first();

        if ($Kelas) {
            //return single Kelas as a resource
            return new KelasResource(true, 'Data Kelas Ditemukan!', $Kelas);
        } else {
            //return error response
            return new KelasResource(false, 'Data Kelas Tidak Ditemukan!', null);
        }
    }


    // Store
    public function store(Request $request, Session $session)
    {
        try {
            // define validation rules
            $validator = Validator::make($request->all(), [
                'nmkelas' => 'required',
                'kelas' => 'required',
                'idjurusan' => 'required',
            ]);

            // check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            // Create Data
            $post = Tblkelas::create([
                // 'idkelas' => $request->idkelas,
                'nmkelas' => $request->nmkelas,
                'kelas' => $request->kelas,
                'idjurusan' => $request->idjurusan,
                'idwali' => $request->idwali,
                'idbk' => $request->idbk,
                'color' => $request->color,
                'shif' => $request->shif ?? 'Pagi',
                'wagroup' => $request->wagroup,
            ]);

            // return response
            return new KelasResource(true, 'Data Kelas Berhasil Ditambahkan!', $post);
        } catch (\Exception $e) {
            return new KelasResource(false, 'Gagal menambah data', $e->getMessage());
        }
    }


    // Update
    public function update(Request $request, $idkelas)
    {
        try {
            // Find the Kelas to be updated
            $Kelas = Tblkelas::where('idkelas', $idkelas)->first();

            // Check if the Kelas exists
            if (!$Kelas) {
                return new KelasResource(false, 'Data Kelas Tidak Ditemukan!', null);
            }

            // Define validation rules
            $validator = Validator::make($request->all(), []);

            // Check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            // Update the Kelas
            $data = $request->only([
                'nmkelas' => $request->nmkelas,
                'kelas' => $request->kelas,
                'idjurusan' => $request->idjurusan,
                'idwali' => $request->idwali,
                'idbk' => $request->idbk,
                'color' => $request->color,
                'shif' => $request->shif,
                'wagroup' => $request->wagroup,
            ]);
            $Kelas->update($data);

            // Return response
            return new KelasResource(true, 'Data Kelas Berhasil Diubah!', $Kelas);
        } catch (\Exception $e) {
            return new KelasResource(false, 'Gagal mengubah data', $e->getMessage());
        }
    }

    
    // Delete
    public function destroy($idkelas)
    {
        try {
            $Kelas = Tblkelas::where('idkelas', $idkelas)->first();
            if ($Kelas) {
                //delete Kelas
                $Kelas->delete();

                //return response
                return new KelasResource(true, 'Data Kelas Berhasil Dihapus!', null);
            } else {
                //return error response
                return new KelasResource(false, 'Data Kelas Tidak Ditemukan!', null);
            }
        } catch (\Exception $e) {
            return new KelasResource(false, 'Gagal menghapus data', $e->getMessage());
        }
    }
}
