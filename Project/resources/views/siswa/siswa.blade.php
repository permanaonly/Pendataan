@extends('layouts.default')

@section('title')
ArgiaCyber
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
									<h3 class="panel-title text-center"> Argia Cyber - <strong>DATA SISWA MAGANG </strong></h3>
                                   
								</div>
                                <div class="row">
                                    <div class="col-sm-1 " >
                                        <form action=""method="GET">
                                        <label for="cari"><h4><strong>Filter : </strong></h4></label>
                                    </div>

                                    <div class="col-sm-5">
                                        <input type="search" class="form-control" name="cari" id="cari" placeholder="masukkan Sekolah/Jurusan"> 
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="subbmit" class="btn btn-success">search</button>
                                        </form>
                                    </div>
                                    
                                </div>

                                
								<div class="panel-body">
                                    
                                    <br>               
                                    <table  class="table table-bordered" id="category-table">
										<thead>
											<tr>
                                                <th>Nama Lengkap</th>
                                                <th>Umur </th>
                                                <th>Email</th>
                                                <th>Nomer Whatsapp</th>
                                                <th>Asal sekolah</th>
                                                <th>Jurusan Sekolah</th>
                                                <th>Status Kelulusan Siswa</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($siswas as $siswa)
                                        <tr>
                                            <td>{{ $siswa->nama_lengkap }}</td>   
                                            @php
                                                $now = Carbon\Carbon::now();
                                                $b_day = Carbon\Carbon::parse($siswa->tanggal_lahir);
                                                $age = $b_day->diffInYears($now);
                                            @endphp
                                            <td>{{ $age }} Tahun</td>
                                            <td>{{ $siswa->email}}</td>
                                            <td>{{ $siswa->no_wa }}</td>
                                            <td>{{ $siswa->asal_sekolah }}</td>
                                            <td>{{ $siswa->Jurusan }}</td>
                                            <td>{{ Kelulusan($siswa->selesai_magang) }}</td>
                                        </tr>
                                       @endforeach
										</tbody>
								    </table>
							    </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@push('scripts')
<script>
$(function() {
    $('#category-table').DataTable();
    
});
</script>
@endpush