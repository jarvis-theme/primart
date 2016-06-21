<div class="col-xs-12 col-sm-3 col-lg-4">
	<h4 class="title">Newsletter</h4>
	<div class="block-content">
		<p>
			Jadilah orang pertama yang mendapatkan info produk terbaru, dan promo dari kami.
			<br><br>
			Daftarkan email anda dan dapatkan segera promo menarik.
		</p>
		<form class="newsletter-form inputfooter" action="{{@$mailing->action}}" method="post" target="_blank" novalidate>
			<input class="input-newsletter" type="email" placeholder="masukkan email anda" name="email" class="input-medium required email" id="newsletter mce-EMAIL" {{ @$mailing->action==''?'disabled="disabled"':'' }} />
			<button class="submitnewletter" type="submit" {{ @$mailing->action==''?'disabled="disabled" style="opacity:0.5"':'' }}>Subscribe</button>
			<div class="clr"></div>
		</form>
	</div>
</div>