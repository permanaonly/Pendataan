@extends('layouts.master')

@section('title')
Fase 1
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
								<h3 class="panel-title text-center"> Langkah Pertama - <strong>Data Siswa</strong></h3>
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
                                <form method="post" action="{{ route('siswa.tambah.post') }}">
            
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <input type="hidden" name="user_id"  class="form-control" value="{{ mt_rand(0, 10000) }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama_lengkap" class="form-control"  placeholder="Nama Lengkap Siswa .." >
                                    </div>

                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir Siswa ..">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir siswa ..">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email siswa ..">

                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Nomer WhatsApp</label>
                                        <input type="text" name="no_wa" class="form-control" placeholder="Nomer WA siswa ..">
                                    </div>
                        
                                    <div class="form-group text-right">
                                        <input type="submit" class="btn btn-primary" value="Next">
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
