<div class="container">
	<div class="inner-column row">
		<div id="center_column" class="col-xs-12 {{count(vertical_banner()) > 0 ? 'col-lg-9' : ''}}">
			<div class="header-green">Log in</div>
			<p>Silahkan Login untuk kemudahan melakukan checkout. Cepat dan Mudah dalam bertransaksi. Mudah untuk mengetahui status dan daftar belanja kamu.</p>
			<br><br>
			<div class="col-sm-6 col-lg-6">
				<form class="form-horizontal" action="{{url('member/login')}}" method="post">
					<div class="form-group">
						<label class="col-sm-3">Email</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" name="email" placeholder="Email" value="{{Input::old('email')}}" required autofocus>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3">Password</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
							<small>
								<a class="forget" href="{{url('member/forget-password')}}">Lupa password?</a>
							</small>
						</div>
					</div>
					<div class="form-group">
						<div class="pull-left col-sm-6">
							<button type="submit" class="btn btn-success">Log in</button>
						</div>
					</div>
				</form>
			</div>
			<div class="pull-right col-xs-12 col-sm-6 col-lg-5 new-account">
				<h2>Belum punya akun?</h2>
				<a href="{{url('member/create')}}" class="btn btn-outline-red">Daftar Sekarang</a>
			</div>
			<br>
		</div>
		@if(count(vertical_banner()) > 0)
		<div class="col-lg-3 col-xs-12">
			@foreach(vertical_banner() as $banners)
			{{HTML::image(banner_image_url($banners->gambar), 'Info Promo')}} 
			<br>
			@endforeach
		</div>
		@endif
	</div>
</div>