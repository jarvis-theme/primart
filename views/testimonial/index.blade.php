<br>
<section id="main-content">
	<div class="container">
		<div class="inner-column row">
			<div id="left_sidebar" class="col-xs-12 col-sm-4 col-lg-3">
				@if(count(list_category()) > 0)
				<div id="categories" class="block sidey">
					<div class="title"><h2>Kategori</h2></div>
					<ul class="block-content nav">
						@foreach(list_category() as $side_menu)
							@if($side_menu->parent == '0')
							<li>
								<a href="{{category_url($side_menu)}}">{{$side_menu->nama}}</a>
								@if($side_menu->anak->count() != 0)
								<ul class="sidekategori">
									@foreach($side_menu->anak as $submenu)
									@if($submenu->parent == $side_menu->id)
									<li>
										<a href="{{category_url($submenu)}}" class="transparent">{{$submenu->nama}}</a>
										@if($submenu->anak->count() != 0)
										<ul class="sidekategori">
											@foreach($submenu->anak as $submenu2)
											@if($submenu2->parent == $submenu->id)
											<li>
												<a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a>
											</li>
											@endif
											@endforeach
										</ul>
										@endif
									</li>
									@endif
									@endforeach
								</ul>
								@endif
							</li>
							@endif
						@endforeach
					</ul>
				</div>
				@endif
				@if(count(list_blog()) > 0)
				<div id="latest-news" class="block">
					<div class="title"><h2>Artikel Terbaru</h2></div>
					<ul class="block-content">
						@foreach(list_blog(3) as $value)
						<li>
							<h5 class="title-news">{{$value->judul}}</h5>
							<p>{{short_description($value->isi,55)}} <a class="read-more" href="{{blog_url($value)}}">Selengkapnya</a></p>
							<span class="date-post">{{date("d M Y", strtotime($value->created_at))}}</span>
						</li> 
						@endforeach
					</ul>
				</div>
				@endif
			</div>
			@if(count(list_category()) == 0 && count(list_blog()) == 0)
			<div id="center_column" class="col-xs-12">
			@else
			<div id="center_column" class="col-xs-12 col-sm-8 col-lg-9">
			@endif
				<div class="header-green">Testimonial</div>
				@if(count(list_testimonial()) > 0)
					@foreach (list_testimonial() as $items)  
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">{{$items->nama}}</h4>
						</div>
						<div class="panel-body">"{{$items->isi}}"</div>
					</div>
					@endforeach
					<div class="row">
						<div class="col-md-12">{{list_testimonial()->links()}}</div>
					</div>
				@else
					<div class="panel panel-default">
						<div class="panel-body"><center><small><i>Belum ada testimonial pelanggan.</i></small></center></div>
					</div>
				@endif
				<br>
				<div class="respond">
					<div class="header-red">Kirim Testimonial</div>
					<form method="post" action="{{url('testimoni')}}" role="form">
						<div class="form-group">
							<label for="name">Nama</label>
							<input type="text" class="form-control" name="nama" id="name" required>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Testimonial</label>
							<textarea name="testimonial" class="form-control" rows="3" required></textarea>
						</div>
						<button type="submit" class="btn btn-danger">Kirim</button>
						<button type="reset" class="btn btn-default">Reset</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>