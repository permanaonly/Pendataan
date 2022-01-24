<?php

namespace App\Http\Controllers;

use App\orangtua;
use Illuminate\Http\Request;

class PendataanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orangtua = orangtua::all();
        return view('orangtua', ['orangtua' => $orangtua]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('tambah2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        orangtua::create([
            'mahasiswa_id' => $request->id,
            'nama_orangtua' => $request->nama,
            'pekerjaan_orangtua' => $request->pekerjaan
        ]);
        return redirect ('orangtua');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pendataan  $pendataan
     * @return \Illuminate\Http\Response
     */
    public function show(Pendataan $pendataan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pendataan  $pendataan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendataan $pendataan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pendataan  $pendataan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendataan $pendataan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pendataan  $pendataan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendataan $pendataan)
    {
        //
    }
}
