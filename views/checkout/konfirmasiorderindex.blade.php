<div class="container">
    <div class="inner-column row">
        @if(count(vertical_banner()) > 0)
        <div id="left_sidebar" class="col-xs-12 col-lg-3">
            <div id="advertising" class="block">
            @foreach(vertical_banner() as $banner)
            <div class="img-block">
                <a href="{{url($banner->url)}}">
                    {{HTML::image(banner_image_url($banner->gambar),'Info Promo',array('class'=>'img-responsive'))}} 
                </a>
            </div>
            @endforeach
            </div>
        </div>
        @endif
        <div id="center_column" class="col-xs-12 col-lg-5">
            <div class="contact-us">
                <div class="header-green">Konfirmasi Pembayaran</div>
                {{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}} 
                    <p>Masukkan kode order untuk melakukan konfirmasi pembayaran</p>
                    <br>
                    <div class="input-group col-lg-12">
                        <input class="form-control" placeholder="Kode Order" type="text" name="kodeorder" required>
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="submit">Cari Kode</button>
                        </span>
                    </div>
                {{Form::close()}} 
            </div>
            <br>
        </div>
        <div class="col-lg-4 col-xs-12">
            <div class="header-blue">Pelanggan Baru</div>
            <p>Nikmati kemudahan dalam berbelanja dengan daftar menjadi member di toko kami.</p>
            <br>
            <a class="btn btn-info" href="{{url('member/create')}}">Register</a>
        </div>
    </div>
</div>