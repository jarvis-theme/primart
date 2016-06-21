<div class="container">
	<div class="inner-column row">
		<div id="left_sidebar" class="col-xs-12 col-sm-4 col-lg-3">
			@if(count(best_seller()) > 0)
			<div id="best-seller" class="block">
				<div class="title"><h2>Produk Terlaris</h2></div>
				<ul class="block-content">
					@foreach(best_seller() as $bestproduk)
					<li>
						<a href="{{product_url($bestproduk)}}">
							<div class="img-block">
								{{HTML::image(product_image_url($bestproduk->gambar1,'thumb'), $bestproduk->nama, array('class'=>'img-responsive imgbest'))}}
							</div>
							<p class="product-name">{{short_description($bestproduk->nama,15)}}</p>
							@if(!empty($bestproduk->hargaCoret))
							<p class="author"><del>{{price($bestproduk->hargaCoret)}}</del></p>
							@endif
							<p class="price">{{price($bestproduk->hargaJual)}}</p> 
						</a>
					</li>
					@endforeach
				</ul>
				<div class="btn-more"><a href="{{url('produk')}}">Lihat Semua</a></div>
			</div>
			@endif
			@if(count(list_blog()) > 0)
			<div id="latest-news" class="block">
				<div class="title"><h2>Artikel Terbaru</h2></div>
				<ul class="block-content">
					@foreach(list_blog(2) as $blogs)
					<li>
						<h5 class="title-news">{{$blogs->judul}}</h5>
						<p>{{short_description($blogs->isi, 150)}}<a class="read-more" href="{{blog_url($blogs)}}">Selengkapnya</a></p>
						<span class="date-post">{{date("F d, Y", strtotime($blogs->created_at))}}</span>
					</li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
		<div id="center_column" class="col-xs-12 col-sm-8 col-lg-9">
			<div class="header-blue">Hubungi Kami</div>
			<div class="maps" id="maplocation">
				@if($kontak->lat!='0' || $kontak->lng!='0')
				<iframe class="detailmaps" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
				@else
				<iframe class="detailmaps" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{str_replace(' ','+',$kontak->alamat)}}&amp;aq=0&amp;oq={{str_replace(' ','+',$kontak->alamat)}}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{str_replace(' ','+',$kontak->alamat)}}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
				@endif
			</div>
			<div class="contact-us" >
				<br>
				<div class="contact-desc">
					@if(!empty($kontak->alamat))
					<strong>Alamat Toko :</strong> {{$kontak->alamat}}<br>
					@endif
					@if(!empty($kontak->telepon))
					<strong>Telepon :</strong> {{$kontak->telepon}}<br>
					@endif
					@if(!empty($kontak->hp))
					<strong>SMS :</strong> {{$kontak->hp}}<br>
					@endif
					@if(!empty($kontak->bb))
					<strong>BBM :</strong> {{$kontak->bb}}<br>
					@endif
					@if(!empty($kontak->email))
					<strong>Email :</strong> <a href="{{$kontak->email}}">{{$kontak->email}}</a>
					@endif
					<div class="clr"></div>
				</div>
				<br><br>
				<form class="contact-form" action="{{url('kontak')}}" method="post">
					<p class="form-group">
						<input class="form-control" placeholder="Nama" name="namaKontak" type="text" required>
					</p>
					<p class="form-group">
						<input class="form-control" placeholder="Email" name="emailKontak" type="text" required>
					</p>
					<p class="form-group">
						<textarea class="form-control" placeholder="Pesan" name="messageKontak" rows="5" required></textarea>
					</p>
					<button class="btn-send submitnewletter">Kirim</button>
				</form>
			</div>
		</div>
	</div>
	</div>
</div>