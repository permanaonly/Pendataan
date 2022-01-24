<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\mahasiswa;
use App\orangtua;


class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function siswa(Request $request)
    {
        if($request->has('cari')){
            $siswas = mahasiswa::where('asal_sekolah', 'LIKE', '%'.$request->cari.'%')
                      ->orWhere('Jurusan', 'LIKE','%'.$request->cari.'%')
                      ->orderBy('nama_lengkap', 'asc')->get();          
        }
        else{
            $siswas = mahasiswa::orderBy('nama_lengkap', 'asc')->get();
        }
       
        return view('siswa.siswa', compact('siswas'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminae\Http\Response
     */
    public function createStepOne(Request $request)
    {
        $siswa = $request->session()->get('siswa');
  
        return view('siswa.tambah',compact('siswa'));
    }
  
    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required',
            'no_wa' => 'required',
        ]);
  
        if(empty($request->session()->get('siswa'))){
            $siswa = new mahasiswa();
            $siswa->fill($validatedData);
            $request->session()->put('siswa', $siswa);
        }else{
            $siswa = $request->session()->get('siswa');
            $siswa->fill($validatedData);
            $request->session()->put('siswa', $siswa);
        }
  
        return redirect()->route('siswa.tambah1');
    }

    public function createStepOnee(Request $request)
    {
        $siswa = $request->session()->get('siswa');
  
        return view('siswa.tambah1',compact('siswa'));
    }
  
    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOnee(Request $request)
    {
        $validatedData = $request->validate([
            'asal_sekolah' => 'required',
            'Jurusan' => 'required',
            'awal_magang' => 'required',
            'selesai_magang' => 'required',
        ]);
  
        if(empty($request->session()->get('siswa'))){
            $siswa = new mahasiswa();
            $siswa->fill($validatedData);
            $request->session()->put('siswa', $siswa);
        }else{
            $siswa = $request->session()->get('siswa');
            $siswa->fill($validatedData);
            $request->session()->put('siswa', $siswa);
        }
  
        return redirect()->route('siswa.tambah2');
    }
    
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $orangtua = $request->session()->get('orangtua');
        $siswa = $request->session()->get('siswa');

        return view('siswa.tambah2',compact('orangtua','siswa'));
    }
  
    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'mahasiswa_id' => 'required',
            'nama_orangtua' => 'required',
            'pekerjaan_orangtua' => 'required',
        ]);
  
        if(empty($request->session()->get('orangtua'))){
            $orangtua = new orangtua();
            $orangtua->fill($validatedData);
            $request->session()->put('orangtua', $orangtua);
        }else{
            $orangtua = $request->session()->get('orangtua');
            $orangtua->fill($validatedData);
            $request->session()->put('orangtua', $orangtua);

        }
  
        return redirect()->route('siswa.tambah3');
    }
    
    public function createStepThree(Request $request)
    {
        $siswa = $request->session()->get('siswa');
        $orangtua = $request->session()->get('orangtua');
        return view('siswa.tabel3',compact('siswa', 'orangtua'));
    }
    public function postCreateStepThree(Request $request)
    {
        $siswa = $request->session()->get('siswa');
        $orangtua = $request->session()->get('orangtua');
        $siswa->save();
        $orangtua->save();
        $request->session()->forget('siswa');
        $request->session()->forget('orangtua');
        return redirect()->route('sukses');
    }
       
 
    public function sukses()
    {
        return view('sukses');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view ('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        mahasiswa::create([
    		'nama_lengkap' => $request->nama,
            'tempat_lahir' => $request->tempat,
            'tanggal_lahir' => $request->tanggal,
            'email' => $request->email,
            'no_wa' => $request->nomer,
            'asal_sekolah' => $request->asalsekolah,
            'Jurusan' => $request->jurusan,
            'awal_magang' => $request->awal,
            'selesai_magang' => $request->selesai
    	]);
 
    	return redirect('siswa');
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
