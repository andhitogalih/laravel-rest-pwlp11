<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMahasiswaRequests;
use App\Http\Resources\MahasiswaResource;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MahasiswaResource::collection(Mahasiswa::paginate(3));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMahasiswaRequests $request)
    {
        return new MahasiswaResource(Mahasiswa::create(
            [
                'Nim' => $request->Nim,
                'Nama' => $request->Nama,
                'Tanggal_Lahir' => $request->Tanggal_Lahir,
                // 'featured_image' => $request->featured_image,
                'kelas_id' => $request->Kelas,
                'Jurusan' => $request->Jurusan,
                'No_Handphone' => $request->No_Handphone,
                'Email' => $request->Email,
            ]
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return new MahasiswaResource($mahasiswa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update([
            'Nim' => $request->Nim,
            'Nama' => $request->Nama,
            'featured_image' => $request->featured_image,
            'Tanggal_Lahir' => $request->Tanggal_Lahir,
            'Kelas' => $request->kelas_id,
            'Jurusan' => $request->Jurusan,
            'No_Handphone' => $request->No_Handphone,
            'Email' => $request->Email,
        ]);
        return new MahasiswaResource($mahasiswa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return response()->noContent();
    }
}
