<div id="shopping-cart" class="fr counter">
	<a href="{{url('checkout')}}" id="keranjang">
		Keranjang ({{Shpcart::cart()->total_items()}})
	</a>
	<a href="{{url('checkout')}}">
		<div class="shopcart">
			<i class="fa fa-shopping-cart fa-lg"></i>
		</div>
	</a>
</div>