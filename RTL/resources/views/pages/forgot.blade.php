@extends('layouts-verticalmenu-light.master2')
@section('css')
@endsection
@section('content')

		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
								<div class="mt-3 pt-3 p-2 pos-absolute">
									<img src="{{URL::asset('assets/img/brand/logo-light.png')}}" class="header-brand-img mb-4" alt="logo">
									<div class="clearfix"></div>
									<img src="{{URL::asset('assets/img/svgs/user.svg')}}" class="ht-100 mb-0" alt="user">
									<h5 class="mt-4 text-white">Reset Your Password</h5>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with the global community</span>
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<img src="{{URL::asset('assets/img/brand/logo.png')}}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
											<div class="clearfix"></div>
											<h5 class="text-right mb-2">Forgot Password</h5>
											<p class="mb-4 text-muted tx-13 ml-0 text-right">It's free to signup and only takes a minute.</p>
											<form>
												<div class="form-group text-right">
													<label>Email</label>
													<input class="form-control" placeholder="Enter your email" type="text" value="">
												</div>
												<button class="btn ripple btn-main-primary btn-block">Request reset link</button>
											</form>
											<div class="card-footer border-top-0 pr-0 mt-3 text-right">
												<p>Did you remembered your password?</p>
												<p class="mb-0">Try to <a href="{{url('signup')}}
">Signin</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->

@endsection
@section('script')
@endsection