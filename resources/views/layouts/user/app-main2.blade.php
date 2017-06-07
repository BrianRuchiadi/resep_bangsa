<!DOCTYPE html>
<html>
<head>
	<title>Resep Bangsa | @yield('sub-title')</title>

	<meta name="viewport" content="width=device-width">
	<meta charset='UTF-8'>
	
	<!-- external fonts -->
	<link href="https://fonts.googleapis.com/css?family=Romanesco" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200" rel="stylesheet">
	<!-- end of external fonts -->

	<!-- Styles -->
    <link href="{{ asset('assets/css/vendor.css') }}" rel="stylesheet" type="text/css"/>
    <!-- <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css"/> -->

    <!-- Scripts -->
    <script src="{{ asset('assets/js/vendor.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

    <style>
    	*{
    		font-family: 'Romanesco', cursive;
    		text-transform: capitalize;
    		color : black;
    		font-weight: bold;
    	}
    	.is-right.access.login, .is-right.access.register{
    		position: absolute;
    		right : 0px;
    		top : 10px;
    		padding : 5px;
    		color : black;
    		background-color: #FFC931;
    		font-family: 'open Sans Condensed', sans-serif;
    		cursor: pointer;
    	}
    	.is-right.access.register{
    		right: 38px;
    		border-right: 1px dotted white;
    	}
    	.is-left.profile{
    		position: absolute;
    		left: 0px;
    		top: 10px;
    		padding : 5px;
    		background-color: #FFC931;
    		font-family: 'open Sans Condensed', sans-serif;
    		color : black;
    	}
    	.container.is-fluid{
    		margin : 0px;
    		background-color: #D8DBD3;
    	}
    	.column{
    		position: relative;
    	}
    	header{
    		background-color : #104A50;
    		height : 80px;
    		z-index: 10;
    	}
    	header h1{
    		font-size : 50px;
    		letter-spacing: 2px;
    		margin-left : 20px;
    		text-align: center;
    		color : #FFC931;
    		text-shadow: 0 0 0.065em white;
    	}
    	.horizontal-nav.columns{
    		background-color : #104A50;
    		box-shadow: 0 4px 2px -2px grey;
    		border-top : 1px dotted grey;
    		z-index: 5;
    	}
    	.menu.column{
    		border-right : 1px dotted grey;
    		text-align: center;
    	}
    	.menu.column a{
    		font-family: 'open Sans Condensed', sans-serif;
    		font-weight: 700;
    		color : white;
    	}
    	.centered-briefcase{
    		margin : 0 auto;
    		height: 500px;
    		width: 80%;
    	}
    	.centered-briefcase.image{
    		margin-top: 5px;
    		height : 445px;
    		width: 100%;
    		background-color: blue;
    		border : 5px solid white;
    	}
    	.centered-briefcase.image img{
    		object-fit: cover;
    		height: 100%;
    		width: 100%;
    	}
    	.centered-briefcase.title{
    		height: 50px;
    		width: 100%;
    		background-color: #FFF8E4;
    		text-align: center;
    	}
    	.stat-criteria.column, .stat-result.column{
    		background-color : grey;
    		height : 50px;
    	}
    	.stat-bar.column{
    		position : relative;
    		padding-top: 15px;
    	}
    	.loading-bar{
    		position : relative;
    		background-color: black;
    		height : 100%;
    	}
    	.recipe.columns, .tips.columns, .makanan.columns, .bahan.columns{
    		height : 400px;
    		margin-top: 5px;
    	}
    	.recipe.column, .tips.column, .makanan.column, .bahan.column{
    		margin : 0;
    		padding : 0;
    	}
    	.recipe.column h1, .tips.column h1, .makanan.column h1, .bahan.column h1{
    		text-align: center;
			font-family: 'Romanesco', cursive;    
			font-size: 40px;
    		display: block;
    		background-color : transparent;
    		color : black;
    	}
    	.recipe.column.is-2{
    		background-color: #FFF8E4;
    		box-shadow: inset 20px 0px 20px 0px beige;
    		z-index: 2;
    		border-right: 2px solid grey;
    	}
    	.recipe.column.is-10, .tips.column.is-10, .makanan.column.is-10, .bahan.column.is-10{
    		background-color: white;
    	}
    	.tips.column.is-2{
    		background-color: #FFF8E4;
    		box-shadow: inset 20px 0px 20px 0px beige;
    		z-index: 2;
    		border-right: 2px solid grey;
    	}
    	.makanan.column.is-2{
    		background-color: #FFF8E4;
    		box-shadow: inset 20px 0px 20px 0px beige;
    		z-index: 2;
    		border-right: 2px solid grey;
    	}
    	.bahan.column.is-2{
    		background-color: #FFF8E4;
    		box-shadow: inset 20px 0px 20px 0px beige;
    		z-index: 2;
    		border-right: 2px solid grey;
    	}
    	.recipe.column ul li, .tips.column ul li, .makanan.column ul li, .bahan.column ul li{
    		padding-left: 20px;
    		font-size: 20px;
    		border-bottom: 1px solid grey;
    		font-weight: normal;
    	}
    	.recipe.column ul li:last-child, .makanan.column ul li:last-child, .bahan.column ul li:last-child{
    		padding-left: 0;
    		border: none;
    	}
    	.recipe.column button.button.is-primary, .makanan.column button.button.is-primary, .recipe-content.step.column table button a, .button.is-info, .bahan.column button.button.is-primary{
    		margin: 0 auto;
    		margin-top: 5px;
    		margin-bottom: 5px;
    		font-size: 16px;
    		display: block;
    		text-align: center;
    		font-family: 'open Sans Condensed', sans-serif;
    		font-weight: bold;
    		text-transform: capitalize;
    		color : white;
    		background-color: #104A50;
    	}
    	.button.is-info{
    		background-color : #3273dc;
    	}
    	.recipe-content.column, .makanan-content.column, .bahan-content.column{
    		margin: 0;
    		padding: 0;
    		height : 100%;
    		display: inline-block;
    	}
    	.recipe-content.column.is-3, .makanan-content.column.is-3, .bahan-content.column.is-3{
    		width: 30%;
    		border-right: 1px dotted grey;
    		overflow-y : hidden;
    	}
    	.recipe-content.column.is-7{
    		width: 70%;
    	}
    	.recipe-content.column img, .makanan-content.column img, .bahan-content.column img{
    		margin-left: 5%;
    		width: 90%;
    		margin-top: 5%;
    		height: 180px;
    		position: absolute;
    		object-fit: cover;
    		border: 5px solid grey;
    	}
    	.bahan-content.column img{
    		margin-top : 20%;
    	}
    	.recipe-content.title, .makanan-content.title, .bahan-content.title{
    		display: block;
    		position: absolute;
    		top : 200px;
    		height : 40px;
    		width: 100%;
    	}
    	.tips-content.column{
    		padding : 0;
    		width: 100%;
    		height: 50%;
    		border-bottom: 1px solid grey;
    	}
    	.tips-content.picture.column{
    		padding : 0;
    		height: 100%;
    		width : 30%;
    		display: inline-block;
    		border-right: 1px dotted grey;
    	}
    	.tips-content.picture.column img{
    		height: 90%;
    		margin : 5%;
    		width: 90%;
    		border : 5px solid grey;
    		object-fit: cover;
    		position: absolute;
    	}
    	.tips-content.brief.column{
    		padding : 0;
    		padding-left : 10px;
    		height: 100%;
    		width: 70%;
    		display: inline-block;
    		position: absolute;
    	}
    	.tips-content.brief.column h1, .tips-content.brief.column strong , .tips-content.brief.column p{
    		font-family: 'open Sans Condensed', sans-serif;
    	}
    	.tips-content.brief.column h1{
    		font-size: 30px;
    	}
    	.tips-content.brief.column strong{
    		display: block;
    		text-align: center;
    	}
    	.tips-content.brief.column button , .tips-content.brief.column button a{
    		display: block;
    		margin : 0 auto;
    		background-color: #104A50;
    		color : white;
    		font-family: 'open Sans Condensed', sans-serif;
    		margin-bottom: 10px;
    	}
    	.tips-content.brief.column button{
    		margin-top : 20px;
    	}
    	.bahan-content.title{
    		top : 250px;
    	}
    	.recipe-content.title h1, .makanan-content.title h1, .bahan-content.title h1{
    		border : none;
    	}
    	.recipe-content.overview, .makanan-content.overview{
    		display : block;
    		position: absolute;
    		top : 250px;
    		padding-left: 10px;
    		font-family: 'open Sans Condensed', sans-serif;
    	}
    	.recipe-content.general.column{
    		margin : 0;
    		width: 100%;
    		height: 150px;
    		border-bottom: 1px solid black;
    	}
    	.recipe-content.step.column{
    		margin: 0;
    		margin-top: -10px;
    		width: 100%;
    		height: 250px;
    	}
    	.recipe-content.general.column table tr td{
    		padding : 5px;
    		padding-left: 15px;
    		font-family: 'open Sans Condensed', sans-serif;
    	}
    	.fa.fa-clock-o, .fa.fa-shopping-basket{
    		color : orange;
    	}
    	.fa.fa-bar-chart, .fa.fa-money{
    		color : green;
    	}
    	table.table.is-narrow{
    		width: auto;
    	}
    	.recipe-content.step.column table{
    		margin-top: 10px;
    	}
    	.recipe-content.step.column table thead tr th{
    		text-align: center;
    		font-family: 'open Sans Condensed', sans-serif;
    	}
    	.recipe-content.step.column table tr td{
    		font-family: 'open Sans Condensed', sans-serif;
    	}
    	footer.footer{
    		margin-top: 20px;
    		background-color : #104A50;
    		color : white;
    	}
    	.header.inquiry.field{
    		font-size: 30px;
    		text-align: center;
    	}
    	label.label{
    		color: white;
    		font-size: 20px;
    	}
    	.input, textarea{
		  	font-family: 'Romanesco', cursive;
		}
		.social{
			color : white;
		}
		/* End Of Index */
		/* Start of Ingredients */
		.split.columns, .resep.split.columns{
			height: 1500px;
			margin-top: 10px;
		}
		.left.column{
			background-color: #FFF8E4;
			padding : 0;	
			border-right: 2px solid grey;
		}
		.left.column ul li{
			font-family: 'open Sans Condensed', sans-serif;
			padding-left: 20px;
			border-bottom: 1px solid grey;
		}
		.left.column ul li:last-child{
			border : none;
		}
		.right.column{
			background-color: white;
			padding : 0;
		}
		.top.bar.column, .top.bar.memasak.column, .top.bar.resep.column{
			border-bottom: 1px solid grey;
			padding: 0;
			height: 20%;
		}
		.top.bar.memasak.column{
			height: 15%;
		}
		.top.bar.resep.column{
			height : 10%;
			display: block !important;
			border-bottom : none;
		}
		.top.bar.column input{
			width: 90%;
			margin: 10px auto;
			display: block;
		}
		.main.bar.columns, .main.bar.memasak.columns, .main.bar.resep.columns{
			height: 65%;
			margin : 0;
			margin-left: 20px;
		}
		.main.bar.memasak.columns{
			margin-left: 0px;
			height : 70%;
		}
		.main.bar.memasak.columns{
			height: 75%;
		}
		.bottom.bar.column{
			height: 15%;
		}
		table.information.table thead th, table.information.table tbody tr td{
			font-family: 'open Sans Condensed', sans-serif;
		}
		table.information.table{
			margin-left : 5%;
		}
		table.information.table tbody tr td a{
			height: 100%;
			width: 100%;
		}
		table.information.table tbody tr td a button{
			padding: 0;
			padding-left: 5px;
			padding-right: 5px;
			font-family: 'open Sans Condensed', sans-serif;
			height: 30px;
			background-color: #104A50;
		}
		table.information.table tbody tr td a button i{
			color : #FFC931;
    		text-shadow: 0 0 0.065em white;
    		padding-right: 5px;
    		font-size: 10px;
		}
		.main.bar.content h1{
			text-align: center;
			margin: 0;
			border-bottom: 1px solid grey;
			background-color: #CDD5D3;
		}
		.main.bar.content h4{
			margin : 0;
			height: 20px;
			text-align: center;
		}
		.main.bar.content img{
			width: 100%;
			height: 150px;
			object-fit: cover;
		}
		.main.bar.content.column.is-3{
			border: 1px solid grey;
			margin : 5px;
		}
		.pagination-list li a{
			font-family : 'open Sans Condensed', sans-serif;
			color : black;
		}
		.pagination{
			margin-top: 20px;
		}
		.holder{
			position: relative;
		}
		.holder i.fa.fa-search{
			position : absolute;
			right : 6%;
			top : 8px;
			cursor: pointer;
		}
		/* End of ingredients */
		/* Start of article */
		.main.bar.memasak.column, .main.bar.resep.column{
			display: block;
			margin-top : 10px;
			margin-left : 5%;
			height : 200px;
			width : 90%;
			border : 1px dotted grey;
		}
		.memasak.left, .memasak.right{
			display: inline-block;
			background-color: transparent;
			height: 100%;
			border: none;
		}
		.memasak.left img{
			display: block;
			width : 96%;
			height: 96%;
			margin: 2%;
			object-fit: cover;
			object-position: center;
		}
		.memasak.right{
			position: absolute;
		}
		.memasak.right strong{
			display: block;
		}
		.memasak.right h1, .memasak.right p, .memasak.right strong{
			font-family : 'open Sans Condensed', sans-serif;
			text-align: center;
			position: relative;
		}
		.memasak.right p{
			text-align: left;
			padding-left: 20px;
		}
		.memasak.right h1{
			font-size: 30px;
			font-weight: 700;
			background-color: #FFF8E4;
		}
		button.memasak.button.is-primary{
			display: block;
			margin: 10px auto;
			color : white;
			background-color: #104A50;
		}
		button.memasak.button.is-primary a{
			font-family : 'open Sans Condensed', sans-serif;
			color : white;
		}
		.misc{
			padding-top : 2px;
			border-top: 1px dotted grey;
			font-family : 'open Sans Condensed', sans-serif;
			text-align: center;
		}
		.fa.fa-eye{
			color : gold;
		}
		.fa.fa-frown-o{
			color : red;
		}
		.fa.fa-smile-o{
			color : green;
		}
		.fa.fa-male, .fa.fa-female{
			color : white;
		}
		/* End of articles */
		/* Start of resep */
		.memasak.right.column.is-9 table tr td{
			font-family : 'open Sans Condensed', sans-serif;
		}
		.main.bar.resep.column{
			display: block;
			margin-top : 10px;
			margin-left : 5%;
			height : 300px;
			width : 90%;
			border : 1px dotted grey;
		}
		.main.bar.resep.column{
			height: 70%;
			margin-left: 0px;
			display: block;
		}
		.resep.split.columns{
			height: 2000px;
		}
		.main.bar.resep.column{
			display: block !important;
			height: 270px;
			margin: 0 auto;
		}
		.resep-content.column.is-6{
			vertical-align: top;
			padding-top: 0;
			margin-bottom: 30px;
			display: inline-block !important;
			max-height: 100px;
			position: relative;
			font-family : 'open Sans Condensed', sans-serif;
		}
		.half-circle{
			display : inline-block;
			border-radius: 50%;
			border : 1px double white;
			height: 40px;
			width: 40px;
			margin-left : -10px;
			box-shadow: 1px 1px 10px black;
		}
		.half-circle:first-child{
			margin : 0;
		}
		.half-circle img{
			border-radius: 50%;
			height : 40px;
			width: 40px;
			object-fit: cover;
		}
		.rating{
			font-family : 'open Sans Condensed', sans-serif;
		}
		.rating-bar.holder{
			position : relative;
			height : 40px;
			width : 200px;
			border-radius : 10px;
			background-color: #CDD5D3;
		}
		.rating-bar{
			position: absolute;
			height : 40px;
			width : 140px;
			border-radius: 10px;
			background-color: #1b926c;
		}
		.rating-bar.medium{
			background-color: #F17112;
		}
		.rating-bar.low{
			background-color: #F12F12;
		}
		.recipe-mobile.column{
			margin : 0;
			padding : 0;
			display: block;
			height: 300px;
			position : relative;
		}
		.recipe-mobile.column:first-child{
			border-top: 5px double grey;
		}
		.top-bar.mobile.column{
			margin : 0;
			padding : 0;
			display: block;
			height: 150px;
			position: relative;
		}
		.recipe-mobile.column img{
			height: 300px;
			width: 100%;
			object-fit: cover;
			object-position: center;
			border-bottom: 2px solid grey;
			filter: brightness(50%);
		}
		.recipe-mobile.title{
			vertical-align: bottom;
			bottom : 0px;
			left: 50px;
			font-size: 30px;
			position: absolute;
			color : white;
		}
		.recipe-mobile.by{
			position: absolute;
			left : 50px;
			top : 15px;
			font-size : 30px;
			color : white;
		}
		.recipe-mobile.column button.button.is-primary{
			position: absolute;
			bottom : 15px;
			right : 50px;
			font-family : 'open Sans Condensed', sans-serif;
		}
		img.cook-icon{
			position: absolute;
			right: 0px;
			height: 40px;
			color : yellow;
		}
		img.cook-icon.mobile{
			position: absolute;
			padding : 5px;
			height : 40px;
			width: 40px;
			right: 50px;
			top : 15px;
			border-bottom: none;
			border-radius: 50%;
			border : 1px solid white;
			background-color: #FF463D;
			box-shadow: 1px 1px 30px white;
			filter : brightness(100%);
		}
		.top-bar.mobile input.input{
			width: 80%;
			margin: 10px auto;
			padding : 0;
			padding-left: 10px;
			display: block;
		}
		.top-bar.mobile i.fa.fa-search{
			position : absolute;
			right : 11%;
			top : 15px;
		}
		.pagination.mobile{
			display: block;
			margin : 10px auto;
			font-size: 0.80rem;
		}
		.index-holder{
			display: block;
			padding-left: 50px;
			letter-spacing: 1px;
		}
		.index-holder span{
			background-color: #FFC931;
			margin: 0 auto;
			padding : 1px;
			font-family : 'open Sans Condensed', sans-serif;
		}
		.index-holder span:hover{
			background-color: white;
			cursor: pointer;
		}
		.recipe-mobile.column i.fa.fa-clock-o{
			position : absolute;
			right : 50px;
			top : 80px;
			padding: 5px 7px;
			font-size: 30px;
			border-radius: 50%;
			color : black;
			background-color: #4875FF;
			border : 1px solid white;
			box-shadow: 1px 1px 30px white;
			filter : brightness(100%);
		}
		.is-active{
			background-color : #FFC931;
		}
		.left.column ul a li.is-active{
			border-bottom : 1px solid grey;
		}
		/* End of Resep */
		/* Start of Profile */
		.profile.column{
			margin : 0;
			padding : 0;
			height: 200px;
			background-color: #FFC931;
		}
		.profile-picture.column.is-200{
			height: 100%;
			width: 200px;
			padding : 0;
			display: inline-block;
			vertical-align: top;
		}
		.profile-picture.column.is-200 img{
			height : 180px;
			width : 90%;
			filter : brightness(120%);
			margin : 10px 5%;
			border-radius: 50%;
			border : 3px double white;
		}
		.profile-main.column{
			margin : 0;
			padding : 0;
			display: inline-block;
			width : calc(100% - 200px);
			height : 100%;
			position : relative;
		}
		.profile-main.column table{
			margin-top : 10px;
		}
		.profile-main.column table tr td{
			letter-spacing: 1px;
			font-size : 20px;
		}
		.profile-point{
			font-family : 'open Sans Condensed', sans-serif;
			position: absolute;
			background-color: white;
			padding : 5px;
			right : 20px;
			top : 10px;
		}
		.profile-point i.fa{
			color : #FFC931;
		}
		.timeline.column.is-fullwidth{
			margin : 0;
			padding : 0;
			height : 1000px;
			width : 100%;
			border-top : 2px double grey;
		}
		.timeline-content.column.is-fullwidth{
			margin : 0;
			padding : 0;
			height : 200px;
			width: 100%;
			border-bottom : 1px solid grey;
		}
		.timeline.content.column{
			padding : 0;
			margin : 0;
			height : 180px;
			width : 90%;
			display: block;
			margin : 10px 5%;
			background-color: red;
		}
		.timeline.content.column h1{
			margin : 0;
			padding : 0;
			display : block;
			text-align: center;
			background-color : wheat;
		}
		.timeline.news-header.column.is-200{
			display : inline-block;
			width : 200px;
			height : calc(100% - 36px);
			background-color: blue;
		}

		.timeline.news-header.column.is-200 img{
			object-fit: cover;
			object-position: center;
			height : calc(100% - 10px);
			margin-top : 5px;
			padding : 0;
		}
    </style>

</head>
<body>
	<div class="container is-fluid">
		<header class="columns">
			<div class="is-left profile">
				<i class="fa fa-male" aria-hidden="true"></i>
				Points : 3000
			</div>
			<div class="title column">
				<h1>Resep Bangsa </h1>
			</div>
			<div class="is-right access login">
				Login
			</div>
			<div class="is-right access register">
				Register
			</div>
		</header>
		<div class="horizontal-nav columns is-mobile">
			<div class="menu column">
				<a href="{{ url('beta') }}">Beranda</a>
			</div>
			<div class="menu column">
				<a href="{{ url('beta/resep') }}">Resep</a>
			</div>
			<div class="menu column">
				<a href="{{ url('beta/tips-tips-memasak')}}">Tips Tips Memasak</a>
			</div>
			<div class="menu column">
				<a href="{{ url('beta/makanan') }}">Makanan</a>
			</div>
			<div class="menu column">
				<a href="{{ url('beta/bahan-makanan') }}">Bahan Makanan</a>
			</div>
		</div>
		<div class="container is-fluid">
		@yield('content')
		</div>

		<footer class="footer">
		  <div class="footer-wrapper container is-multiline">
		  	<div class="footer-inquiry is-fullwidth">
		  		<div class="header inquiry field"><h1>Hubungi kami</h1></div>
		  		<form method="POST" action="{{ url('/inquiry') }}">
		  			{{ csrf_field() }}
		  			@if(count($errors) > 0)
		  			<div class="header error inquiry field"><h1>*{{ $errors->first() }}</h1></div>
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
		    	<a href="https://www.facebook.com/resepbangsa/" class="social"><i class="fa fa-facebook"></i></a>
		    	<i class="fa fa-twitter"></i>
		    	<i class="fa fa-instagram"></i>
		    	<i class="fa fa-whatsapp"></i><br>
		    </div>
		  </div>
		</footer>
	</div>
</body>
</html>