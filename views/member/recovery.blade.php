<div class="container">
	<div class="inner-column row">
		<div id="center_column" class="col-lg-8 col-lg-offset-2">
			<div class="header-green">Reset Password</div>
			<p>Kamu bisa mengganti password lama kamu dengan yang baru melalui halaman ini.</p>
			<br>
			<div class="col-lg-6">
				<form class="form-horizontal" action="{{url('member/recovery/'.$id.'/'.$code)}}" method="post">
					<div class="form-group">
						<label class="col-sm-3">Password</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3">Konfirmasi password</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi password" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-success">Reset</button>
						</div>
					</div>
				</form>
			</div>
			<div class="pull-right col-lg-5 new-account">
				<h2>Belum punya akun?</h2>
				<a href="{{url('member/create')}}" class="btn btn-outline-red">Daftar Sekarang</a>
			</div>
			<br>
		</div>
	</div>
</div>