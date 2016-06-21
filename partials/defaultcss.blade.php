	{{favicon()}} 

	{{generate_theme_css('primart/assets/css/reset.css')}} 
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	@if($tema->isiCss=='') 
	{{generate_theme_css('primart/assets/css/style.css?v=001')}} 
	@else 
	{{generate_theme_css('primart/assets/css/editstyle.css?v=001')}} 
	@endif 
	{{generate_theme_css('primart/assets/css/flexslider.css')}} 
	{{generate_theme_css('primart/assets/css/owl.carousel.css')}} 
	{{generate_theme_css('primart/assets/css/owl.theme.css')}} 
	{{generate_theme_css('primart/assets/css/jquery.fancybox.css')}} 

	<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">

	<noscript>
		{{generate_theme_css('primart/assets/css/nojs.css')}} 
	</noscript>