@extends('layouts.master')

@section('title')
Fase validasi
@endsection

@section('argia')
active
@endsection

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                        <div class="panel-heading">
							<h3 class="panel-title text-center"> Langkah Validasi - <strong>Data Siswa</strong></h3>
						</div>
						<div class="panel-body">
                        <form method="post" action="{{ route('siswa.tambah3.post') }}">
                            {{ csrf_field() }}

                            <table class="table table-bordered table-striped">
                                <tr>
                                    <td> Id Siswa:</td>
                                    <td><strong>{{ $siswa->user_id }}</strong></td>
                                </tr>
                                <tr>
                                    <td> Nama Siswa:</td>
                                    <td><strong>{{ $siswa->nama_lengkap }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Umur Siswa:</td>
                                    <td><strong>{{ hitung_umur($siswa->tanggal_lahir)  }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Nomer WA siswa :</td>
                                    <td><strong>{{ $siswa->no_wa }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Asal Sekolah siswa</td>
                                    <td><strong>{{ $siswa->asal_sekolah }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Jurusan siswa </td>
                                    <td><strong>{{ $siswa->Jurusan }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Status Kelulusan siswa </td>
                                    @php
                                                $selesai = new DateTime($siswa->selesai_magang);
                                                $today = new DateTime("today"); 
                                                if ($today > $selesai) { 
                                                    return("LULUS");}
                                                else {
                                                $y = $selesai->diff($today)->y;
                                                $m = $selesai->diff($today)->m;
                                                $d = $selesai->diff($today)->d;
                                                
                                                }
                                    @endphp
                                    <td><strong>{{  $y."tahun ".$m." bulan ".$d." hari" }} </strong></td>
                                </tr>
                                
                                <tr>
                                    <td>Nama Orangtua:</td>
                                    <td><strong>{{ $orangtua->nama_orangtua }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan Orangtua: </td>
                                    <td><strong>{{ $orangtua->pekerjaan_orangtua }}</strong></td>
                                </tr>
                            </table>
                            <div class="card-footer">
                                        <div class="row"></div>
                                            <div class=" text-left" >
                                                <a href="{{ route('siswa.tambah2') }}" class="btn btn-danger pull-left"> Kembali</a>
                                            </div>
                                            <div class="  text-right">
                                                <button type="subbmit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
                                