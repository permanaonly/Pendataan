@extends('layouts.master')

@section('title')

@endsection

@section('content')
    <div class="main">  
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible" role="alert">
							
							<i class="fa fa-check-circle"></i> Data Siswa Berhasil Ditambah!!!
						</div>

                        <div id="pesan"></div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
            var url = "{{ route('home') }}"; // url tujuan
            var count = 4; // dalam detik
            function countDown() {
                if (count > 0) {
                    count--;
                    var waktu = count + 1;
                    $('#pesan').html('Anda akan di alihkan dalam hitungan ' + waktu + ' detik.');
                    setTimeout("countDown()", 1000);
                } else {
                    window.location.href = url;
                }
            }
            countDown();
        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection