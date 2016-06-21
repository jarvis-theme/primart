<div class="container">
	<div class="inner-column row">
		<div class="col-lg-6 col-lg-offset-3">
			<form class="form-horizontal" action="{{url('member/forgetpassword')}}" method="post">
				<div class="header-blue">Lupa Password</div>
				<p>Kamu dapat mereset password akun kamu dengan memasukkan alamat email yang kamu gunakan saat mendaftar.</p>
				<br>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Email" name="recoveryEmail" required>
					<span class="input-group-btn">
						<button class="btn btn-info" type="submit">Reset Password</button>
					</span>
				</div><br><br>
			</form>
			<hr>
			<br>
			<div id="register-now">
				<p>Nikmati kemudahan berbelanja dengan mendaftar sebagai member.</p>
				<a href="{{url('member/create')}}" class="btn btn-outline-red">Daftar Sekarang</a>
			</div>
		</div>
	</div>
</div>