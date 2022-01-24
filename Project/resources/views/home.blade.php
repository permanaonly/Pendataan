@extends('layouts.master')

@section('title')

@endsection

@section('content')
    <div class="main">  
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        
                    @include('siswa.tambah')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content1')
<div class="vertical-align-wrap">
	<div class="vertical-align-middle">
		<div class="auth-box ">
           
        </div>
	</div>
</div>
@endsection