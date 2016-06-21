			<section id="btm-info">
				<div id="adv-home">
					<div class="container">
						<div class="row">
							@foreach(horizontal_banner() as $banners)
							<div class="col-sm-12">
								<div class="adv-full">
									<a href="{{url($banners->url)}}">
										{{HTML::image(banner_image_url($banners->gambar),'Info Promo',array('width'=>'1181'))}} 
									</a>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</section>
			<footer>
				<div class="top-footer">
					<div class="container">
						<div class="row">
							{{ Theme::partial('subscribe') }} 

							<div id="about-foot" class="col-xs-12 col-sm-3 col-lg-3">
								<h4 class="title">Latest News</h4>
								<div class="block-content">
									@if(count($blogBaru) > 0)
										<ul>
											@foreach(recentBlog(null, 3) as $blogs)
											<li>
												<a href="{{blog_url($blogs)}}">
													<strong>{{$blogs->judul}}</strong>
													<p>{{short_description($blogs->isi, 70)}}</p>
												</a>
												<p>{{date_format($blogs->created_at, 'd/m/Y')}}</p>
											</li>
											<br>
											@endforeach
										</ul>
									@else
										<p>Belum ada berita terbaru</p>
									@endif
								</div>
							</div>

							<div id="links-foot" class="col-xs-12 col-sm-3 col-lg-2">
								<h4 class="title">Information</h4>
								<div class="block-content">
									<ul>
									@foreach(all_menu() as $key=>$menu)
									@if($key == '1' || $key == '2')
										@foreach($menu->link as $link_menu)
										@if($menu->id == $link_menu->tautanId)
										<li>
											<a href="{{menu_url($link_menu)}}">{{$link_menu->nama}}</a>
										</li>
										@endif
										@endforeach
									@endif
									@endforeach  
									</ul>
								</div>
							</div>

							<div id="contact-foot" class="col-xs-12 col-sm-3 col-lg-3">
								<h4 class="title">Hubungi Kami</h4>
								<div class="block-content">
									<p><strong>{{ucwords($kontak->nama)}}</strong></p><br>
									@if(!empty($kontak->telepon))
									<p>Phone : {{$kontak->telepon}}<br>
									@endif
									@if(!empty($kontak->hp))
									SMS : {{$kontak->hp}}<br>
									@endif
									@if(!empty($kontak->bb))
									BBM : {{$kontak->bb}}<br>
									@endif
									@if(!empty($kontak->email))
									Email : <a href="{{$kontak->email}}">{{$kontak->email}}</a></p>
									@endif
									<br>
									{{short_description(about_us()->isi,130)}}
									<br><br>
									<div class="social">
										<h4>Social Media</h4><br>
										@if(!empty($kontak->fb))
										<div class="social-btn" id="facebook" title="Facebook">
											<a class="first-link" href="{{url($kontak->fb)}}" target="_blank">
												<i class="fa fa-facebook" title="Facebook"></i>
											</a>
											<a href="{{url($kontak->fb)}}"><i class="fa fa-facebook"></i></a>
										</div>
										@endif
										@if(!empty($kontak->tw))
										<div class="social-btn" id="twitter" title="Twitter">
											<a class="first-link" href="{{url($kontak->tw)}}" target="_blank">
												<i class="fa fa-twitter" title="Twitter"></i>
											</a>
											<a href="{{url($kontak->tw)}}"><i class="fa fa-twitter"></i></a>
										</div>
										@endif
										@if(!empty($kontak->gp))
										<div class="social-btn" id="googleplus" title="Google+">
											<a class="first-link" href="{{url($kontak->gp)}}" target="_blank">
												<i class="fa fa-google" title="Google+"></i>
											</a>
											<a href="{{url($kontak->gp)}}"><i class="fa fa-google"></i></a>
										</div>
										@endif
										@if(!empty($kontak->pt))
										<div class="social-btn" id="pinterest" title="Pinterest">
											<a class="first-link" href="{{url($kontak->pt)}}" target="_blank">
												<i class="fa fa-pinterest" title="Pinterest"></i>
											</a>
											<a href="{{url($kontak->pt)}}"><i class="fa fa-pinterest"></i></a>
										</div>
										@endif
										@if(!empty($kontak->tl))
										<div class="social-btn" id="tumblr" title="Tumblr">
											<a class="first-link" href="{{$kontak->tl}}" target="_blank">
												<i class="fa fa-tumblr" title="Tumblr"></i>
											</a>
											<a href="{{$kontak->tl}}"><i class="fa fa-tumblr"></i></a>
										</div>
										@endif
										@if(!empty($kontak->ig))
										<div class="social-btn" id="instagram" title="Instagram">
											<a class="first-link" href="{{url($kontak->ig)}}" target="_blank">
												<i class="fa fa-instagram" title="Instagram"></i>
											</a>
											<a href="{{url($kontak->ig)}}"><i class="fa fa-instagram"></i></a>
										</div>
										@endif
										@if(!empty($kontak->picmix))
										<div class="social-btn" title="Picmix">
											<a class="first-link" href="{{url($kontak->picmix)}}" target="_blank">
												<img alt="picmix" src="https://s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/blogs/event/icon-picmix.png" height="39" width="39">
											</a>
											<a href="{{url($kontak->ig)}}"><i class="fa fa-instagram"></i></a>
										</div>
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="payments">
					<div class="container">
						@foreach(list_banks() as $value)
							@if($value->status == 1)
							<img src="{{bank_logo($value)}}" class="img-responsive logobank" alt="{{$value->bankdefault->nama}}" title="{{$value->bankdefault->nama}}">
							@endif
						@endforeach
						@foreach(list_payments() as $pay)
							@if($pay->nama == 'ipaymu' && $pay->aktif == 1)
							<img src="{{url('img/bank/ipaymu.jpg')}}" class="img-responsive logobank" alt="ipaymu" title="Ipaymu" />
							@endif
							@if($pay->nama == 'bitcoin' && $pay->aktif == 1)
							<img src="{{url('img/bitcoin.png')}}" class="img-responsive logobank" alt="bitcoin" title="Bitcoin" />
							@endif
							@if($pay->nama == 'paypal' && $pay->aktif == 1)
							<img src="{{url('img/bank/paypal.png')}}" class="img-responsive logobank" alt="paypal" title="Paypal" />
							@endif
						@endforeach
						@if(count(list_dokus()) > 0 && list_dokus()->status == 1)
						<img src="{{url('img/bank/doku.jpg')}}" class="img-responsive logobank" alt="doku myshortcart" title="Doku" />
						@endif
						@if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)
						<img src="{{url('img/bank/veritrans.png')}}" class="img-responsive logobank" alt="Veritrans" title="Veritrans">
						@endif
					</div>
				</div>
				<div class="copyright">
					<div class="container">
						<p><strong>&copy; {{ short_description(Theme::place('title'),80) }} {{date('Y')}} All Right Reserved. </strong> Powered by <a href="http://jarvis-store.com" target="_blank">Jarvis Store</a></p>
					</div>
				</div>
			</footer>
			{{pluginPowerup()}} 