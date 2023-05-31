<?php

namespace App\Http\Controllers;

use App\Models\pemberkatan;
use Illuminate\Http\Request;

class PemberkatanController extends Controller
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

    public function store(Request $request)
    {
        $request->validate([
            'nama_jemaat'=>'required|max:200',
            'tempat_lahir'=>'required|max:200',
            'tanggal_lahir'=>'required|max:200',
            'gender'=>'required|max:200',
            'alamat'=>'required|max:200',
            'no_hp'=>'required|max:200',
        ]);

        $baptis = new pemberkatan();
        $baptis->nama_jemaat = $request->nama_jemaat;
        $baptis->tempat_lahir = $request->tempat_lahir;
        $baptis->tanggal_lahir = $request->tanggal_lahir;
        $baptis->gender = $request->gender;
        $baptis->alamat = $request->alamat;
        $baptis->no_hp = $request->no_hp;
        $baptis->save();
        return response()->json(['message'=>'Pemberkatan added succesfully'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pemberkatan  $pemberkatan
     * @return \Illuminate\Http\Response
     */
    public function show(pemberkatan $pemberkatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pemberkatan  $pemberkatan
     * @return \Illuminate\Http\Response
     */
    public function edit(pemberkatan $pemberkatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pemberkatan  $pemberkatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pemberkatan $pemberkatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pemberkatan  $pemberkatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pemberkatan $pemberkatan)
    {
        //
    }
}
