@extends('layouts.master')

@section('title')
Register |
@endsection

@section('content')
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
                    
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="{{asset('admin/assets/img/logo.png')}}" alt="Klorofil Logo"></div>
								<p class="lead">Regist your acount</p>
							</div>
							<form class="form-auth-small" action="{{ route('auths.regist.post') }}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
									<label for="nama" class="control-label sr-only">Nama</label>
									<input type="text" name="nama" class="form-control" id="nama"  placeholder="Nama">
								</div>
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="email" name="email" class="form-control" id="signin-email"  placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" name="password"class="form-control" id="signin-password"  placeholder="Password">
								</div>
								<div class="form-group clearfix">
                                    <label class=" element-left">
										<span>Sudah Punya Akun? <a href=""> Login disini </a></span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
							</form>
                        </div>
					
                </div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
@endsection
