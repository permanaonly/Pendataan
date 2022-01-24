@extends('layouts.default')

@section('title')
Dashboard
@endsection

@section('dasboard')
active
@endsection

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
            <div class="flex-center position-ref full-height dasboard">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Input Data Siswa Magang Argia Cyber
                </div>

                
            </div>
        </div>
                    <!-- Styles -->
                    <style>
                        .dasboard {
                            background-color: white;
                            color: #000;
                            font-family: 'Nunito', sans-serif;
                            font-weight: 200;
                            height: 100vh;
                            margin: 0;
                        }

                        .full-height {
                            height: 100vh;
                        }

                        .flex-center {
                            align-items: center;
                            display: flex;
                            justify-content: center;
                        }

                        .position-ref {
                            position: relative;
                        }

                        .top-right {
                            position: absolute;
                            right: 10px;
                            top: 18px;
                        }

                        .content {
                            text-align: center;
                        }

                        .title {
                            font-size: 84px;
                        }

                        .links > a {
                            color: #636b6f;
                            padding: 0 25px;
                            font-size: 13px;
                            font-weight: 600;
                            letter-spacing: .1rem;
                            text-decoration: none;
                            text-transform: uppercase;
                        }

                        .m-b-md {
                            margin-bottom: 30px;
                        }
                    </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop