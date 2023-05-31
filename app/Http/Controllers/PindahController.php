<?php

namespace App\Http\Controllers;

use App\Models\pindah;
use Illuminate\Http\Request;

class PindahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $request->validate([
            'nama_jemaat'=>'required|max:200',
            'tempat_lahir'=>'required|max:200',
            'tanggal_lahir'=>'required|max:200',
            'gender'=>'required|max:200',
            'golongan_darah'=>'required|max:200',
            'alamat'=>'required|max:200',
            'no_hp'=>'required|max:200',
            'gereja'=>'required|max:200'
        ]);

        $baptis = new pindah();
        $baptis->nama_jemaat = $request->nama_jemaat;
        $baptis->tempat_lahir = $request->tempat_lahir;
        $baptis->tanggal_lahir = $request->tanggal_lahir;
        $baptis->gender = $request->gender;
        $baptis->golongan_darah = $request->golongan_darah;
        $baptis->alamat = $request->alamat;
        $baptis->no_hp = $request->no_hp;
        $baptis->gereja = $request->gereja;
        $baptis->save();
        return response()->json(['message'=>'Pindah huria added succesfully'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pindah  $pindah
     * @return \Illuminate\Http\Response
     */
    public function show(pindah $pindah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pindah  $pindah
     * @return \Illuminate\Http\Response
     */
    public function edit(pindah $pindah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pindah  $pindah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pindah $pindah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pindah  $pindah
     * @return \Illuminate\Http\Response
     */
    public function destroy(pindah $pindah)
    {
        //
    }
}
