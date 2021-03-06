<div class="container">
	<div class="inner-column row">
		<div id="left_sidebar" class="col-xs-12 col-sm-4 col-lg-3">
			@if(count(list_blog_category()) > 0)
			<div id="latest-news" class="block">
				<div class="title"><h2>Kategori</h2></div>
				<ul class="block-content">
					@foreach(list_blog_category() as $kat)
					<span class="underline"><a href="{{blog_category_url($kat)}}">{{$kat->nama}}</a></span>  
					@endforeach 
				</ul>
			</div>
			@endif
			@if(count(best_seller()) > 0)
			<div id="best-seller" class="block">
				<div class="title"><h2>Produk Terlaris</h2></div>
				<ul class="block-content">
					@foreach(best_seller(3) as $bestproduk )
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
			@if(count(vertical_banner()) > 0)
			<div id="adv-sidebar" class="block">
				@foreach(vertical_banner() as $banners)
				<a href="{{url($banners->url)}}">
					{{HTML::image(banner_image_url($banners->gambar),'Info Promo',array('class'=>'img-responsive'))}} 
				</a>
				@endforeach
			</div>
			@endif
		</div>
		@if(count(list_blog_category()) == 0 && count(best_seller()) == 0 && count(vertical_banner()) == 0)
		<div id="center_column" class="col-xs-12">
		@else
		<div id="center_column" class="col-xs-12 col-sm-8 col-lg-9">
		@endif
			<div class="product-list">
				<section class="content">
					<div class="entry">
						<div class="header-red">{{$detailblog->judul}}</div>
						<ul id="blogtag">
							<small>
								<span class="date-post"><i class="fa fa-calendar"></i> {{waktuTgl($detailblog->created_at)}}</span>  
								<span class="date-post"><i class="fa fa-tags"></i> <a href="{{blog_category_url(@$detailblog->kategori)}}">{{@$detailblog->kategori->nama}}</a></span>
							</small>
						</ul>
						<p>{{$detailblog->isi}}</p>
					</div>
					<hr>
					<div class="navigate comments clearfix">
					@if(prev_blog($detailblog))
						<div class="pull-left"><a href="{{blog_url(prev_blog($detailblog))}}">← Sebelumnya</a></div>
					@else
						<div class="pull-right"></div>
					@endif
					@if(next_blog($detailblog))
						<div class="pull-right">
							<a class="pull-right" href="{{blog_url(next_blog())}}">Selanjutnya →</a>
						</div>
					@else
						<div class="pull-right"></div>
					@endif
					</div>
					<hr>
					<div>
						{{$fbscript}}
						{{fbcommentbox(blog_url($detailblog), '100%', '5', 'light')}} 
					</div>
				</section>
			</div>
		</div>
	</div>
</div>