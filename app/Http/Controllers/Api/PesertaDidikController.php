<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Model
use App\Models\Tblpesertadidik;

// Resources
use App\Http\Resources\PesertaDidikResource;

// Any
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PesertaDidikController extends Controller
{
    // Index
    public function index()
    {
        //get posts
        $posts = Tblpesertadidik::latest()->paginate(5);

        //return collection of posts as a resource
        return new PesertaDidikResource(true, 'List Data Posts', $posts);
    }

    //Store
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'noreg' => 'required',
            'namalengkap'     => 'required',
            'panggilan'     => 'required',
            'jk'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/posts', $image->hashName());

        //create post
        $post = Tblpesertadidik::create([
            // 'image'     => $image->hashName(),
            'noreg' => $request->noreg,
            'namalengkap' => $request->namalengkap,
            'panggilan' => $request->panggilan,
            'jk' => $request->jk,
        ]);

        //return response
        return new PesertaDidikResource(true, 'Data Post Berhasil Ditambahkan!', $post);
    }

    // Show Detail
    public function show(Tblpesertadidik $post)
    {
        //return single post as a resource
        return new PesertaDidikResource(true, 'Data Post Ditemukan!', $post);
    }

    // Update
    public function update(Request $request, Tblpesertadidik $post)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'title'     => 'required',
            'content'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //check if image is not empty
        // if ($request->hasFile('image')) {

        //     //upload image
        //     // $image = $request->file('image');
        //     // $image->storeAs('public/posts', $image->hashName());

        //     //delete old image
        //     // Storage::delete('public/posts/'.$post->image);

        //     //update post with new image
        //     $post->update([
        //         'image'     => $image->hashName(),
        //         'title'     => $request->title,
        //         'content'   => $request->content,
        //     ]);

        // } else {

            //update post without image
            $post->update([
                'title'     => $request->title,
                'content'   => $request->content,
            ]);
        // }

        //return response
        return new PesertaDidikResource(true, 'Data Post Berhasil Diubah!', $post);
    }

    public function destroy(Tblpesertadidik $post)
    {
        //delete image
        Storage::delete('public/posts/'.$post->image);

        //delete post
        $post->delete();

        //return response
        return new PesertaDidikResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
