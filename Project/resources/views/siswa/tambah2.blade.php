@extends('layouts.master')

@section('title')
Fase 3
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
								<h3 class="panel-title text-center"> Langkah ketiga - <strong>Data orangtua</strong></h3>
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
                                <form method="post" action="{{ route('siswa.tambah2.post') }}">
            
                                    {{ csrf_field() }}                       
                                    <div class="form-group">
                                        <label>mahasiswa_id</label>
                                        <input type="text" name="mahasiswa_id" readonly="readonly" class="form-control" value="{{ $siswa->user_id}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Orangtua</label>
                                        <input type="text" name="nama_orangtua" class="form-control" placeholder="Nama Orangtua .." >
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" name="pekerjaan_orangtua">
                                            <option value="pegawai negeri">Pegawai Negeri</option>
                                            <option value="Pegawai Sasta">Pegawai Swasta</option>
                                            <option value="wirausaha">Wirausahaan</option>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        irausaha">Wirausaha</option>
                                        </select>
                                    </div>
                                    
                                    <div class="card-footer">
                                        <div class="row"></div>
                                            <div class=" text-left" >
                                                <a href="{{ route('siswa.tambah1') }}" class="btn btn-danger pull-left"> kembali</a>
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
@endsection