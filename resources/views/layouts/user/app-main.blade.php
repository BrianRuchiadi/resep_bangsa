<!DOCTYPE html>
<html>
<head>
	<title>Resep Bangsa</title>

	<meta name="viewport" content="width=device-width">
	<meta charset='UTF-8'>
	
	<!-- external fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Monsieur+La+Doulaise" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<!-- end of external fonts -->

	<!-- Styles -->
    <link href="{{ asset('assets/css/vendor.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/vendor.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

</head>
<body>
	<div class="container is-fluid is-mobile">
		<header class="header columns">
			<div class="header-left column is-one-quarter"></div>
			<div class="app-name column is-half">
				Resep Bangsa
			</div>
			<div class="header-right column is-one-quarter"></div>
		</header>

		<div class="main-content columns">
			<div class="navigation column is-narrow is-hidden-mobile">
				<nav class="panel">
					@foreach($allRegions as $region)
					<a class="panel-block" href="{{ url('makanan/' . str_replace(" ","-",$region->name) .'') }}">
						<span class="panel-icon">
							<i class="fa fa-map"></i>
						</span>
						{{ $region->name }}
					</a>
					@endforeach
					
				</nav>
			</div>

			<div class="content column">
				<div class="page-index column">
					<h1> @yield('title') </h1>
				</div>

				<div class="sub-nav column">
					<div class="tabs">
					  <ul>
					    <li><a href="{{ url('/') }}">Beranda</a></li>
					    <li><a href="{{ url('makanan') }}">Makanan</a></li>
					    <li><a href="{{ url('bahan-makanan') }}">Bahan Makanan</a></li>
					    <li><a href="{{ url('pasar') }}">Pasar</a></li>
					  </ul>
					</div>
				</div>
				<div class="search-bar column">
					<p class="search-input control">
						<i class="in-box fa fa-search" aria-hidden="true"></i>
					    <input class="input" type="text" placeholder="cari makanan">
					</p>
				</div>
				<div class="quick-access-button column">
					<a href="{{ url('kontribusi/data-makanan') }}">
					<button class="button is-primary">
						<i class="fa fa-plus" aria-hidden="true"></i>
						kontribusi data makanan
					</button>
					</a>
					<a href="{{ url('kontribusi/resep') }}">
					<button class="button is-success">
						<i class="fa fa-plus" aria-hidden="true"></i>
						kontribusi resep
					</button>
					</a>
					<a href="{{ url('kontribusi/bahan-makanan') }}">
					<button class="button is-warning">
						<i class="fa fa-plus" aria-hidden="true"></i>
						kontribusi bahan makanan
					</button>
					</a>
					<a href="{{ url ('permintaan/data-makanan')}}">
					<button class="button is-info">
						<i class="fa fa-plus" aria-hidden="true"></i>
						permintaan data makanan
					</button>
					</a>
				</div> 

				@yield('content')
			</div>
		</div><!-- this is end of main-content column -->
		<!-- start of footer -->
		<footer class="footer">
		  <div class="footer-wrapper container is-multiline">
		  	<div class="footer-inquiry is-fullwidth">
		  		<div class="header inquiry field"><h1>Hubungi kami</h1></div>
		  		<form method="POST" action="{{ url('/inquiry') }}">
		  			{{ csrf_field() }}
		  			@if(count($errors) > 0)
		  			<div class="header inquiry field"><h1>{{ $errors->first() }}</h1></div>
		  			@endif
			  		<div class="field">
					  <label class="label">Nama</label>
					  <p class="control has-icons-left has-icons-right">
					    <input class="input" type="text" placeholder="Nama" name="nama">
					    <span class="icon is-small is-left">
					      <i class="fa fa-user"></i>
					    </span>
					  </p>
					</div>

					<div class="field">
					  <label class="label">Email</label>
					  <p class="control has-icons-left has-icons-right">
					    <input class="input" type="email" placeholder="Email" name="email" id="inquiry_email" onkeyup="checkEmailForInquiry()" onmouseleave="checkEmailForInquiry()">
					    <span class="icon is-small is-left">
					      <i class="fa fa-envelope"></i>
					    </span>
					  </p>
					</div>

					<div class="field">
					  <label class="label">Pesan</label>
					  <p class="control">
					    <textarea class="textarea" placeholder="Pesan" name="pesan"></textarea>
					  </p>
					</div>

					<div class="field is-grouped">
					  <p class="control">
					    <button class="inquiry button is-primary">Submit</button>
					  </p>
					</div>
				</form>

		  	</div>
		    <div class="footer-link column is-fullwidth"></div>
		    <div class="footer-content column is-fullwidth"></div>
		    <div class="footer-social-media column is-fullwidth has-text-centered">
		    	<i class="fa fa-facebook"></i>
		    	<i class="fa fa-twitter"></i>
		    	<i class="fa fa-instagram"></i>
		    	<i class="fa fa-whatsapp"></i><br>
		    	<a href="{{ url ('hubungi')}}">Contact Us</a>
		    </div>
		  </div>
		</footer>
		<!-- end of footer -->
	</div>
</body>
</html>