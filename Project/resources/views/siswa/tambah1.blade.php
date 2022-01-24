@extends('layouts.master')

@section('title')
Fase 2
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
								<h3 class="panel-title text-center"> Langkah kedua - <strong>Data sekolah</strong></h3>
							</div>
							<div class="panel-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                        
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="{{ route('siswa.tambah1.post') }}">
            
                                    {{ csrf_field() }}                       
                                    <div class="form-group">
                                        <label>Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah mahasiswa ..">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>jurusan</label>
                                        <input type="text" name="Jurusan" class="form-control" placeholder="jurusan mahasiswa ..">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Awal Sekolah</label>
                                        <input type="date" name="awal_magang" class="form-control" placeholder="Awal Magang ..">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Selesai Sekolah</label>
                                        <input type="date" name="selesai_magang" class="form-control" placeholder="Selesai Magang ..">
                                    </div>
                                    
                                    <div class="card-footer">
                                        <div class="row"></div>
                                            <div class=" text-left" >
                                                <a href="{{ route('siswa.tambah') }}" class="btn btn-danger pull-left"> Kembali</a>
                                            </div>
                                            <div class="  text-right">
                                                <button type="subbmit" class="btn btn-primary">Next</button>
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