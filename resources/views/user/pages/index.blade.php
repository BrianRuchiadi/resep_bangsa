@extends('layouts.user.app-main')
@section('title')
	Beranda
@endsection
@section('content')
<div class="vision column">
	<blockquote> "Mari kita berjuang bersama untuk menjaga keabsahan kuliner nusantara" </blockquote>
</div>

<div class="main-image-wrapper column is-hidden-mobile">
	<div class="main-image column">
		<div class="half-black layer">
		</div>
		<span>Gado Gado</span>
	</div>
	
</div>
<div class="index container columns is-multiline is-fluid">
	<div class="index-makanan container columns is-fullwidth is-fluid is-multiline">
		<div class="header index-makanan column is-3">
			Makanan
			<a href="{{ url('/makanan') }}" class="is-hidden-desktop is-hidden-tablet is-pulled-right"><button class="mobile button is-info">Lihat lengkap</button></a>
		</div>
		<div class="header index-makanan column is-9 is-hidden-mobile">
			<a href="{{ url('/makanan') }}"><button class="button is-info">Lihat lengkap</button></a>
		</div>
		<div class="index-makanan column is-3">
			<figure class="index image is-square" data-name="{{$randomFood->name}}">
			  <a href="#"><img src="{{ url($randomFood->picture) }}"/></a>
			</figure>
		</div>
		<div class="index-makanan-menu column is-9 is-hidden-mobile">
			<div class="index-makanan menu columns">
				@foreach($randomFoods as $randomFood)
				<div class="index-makanan-menu column is-3" data-name="{{ $randomFood->name }}">
					<a href="#"><img src="{{ url($randomFood->picture) }}"/></a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>	

<div class="ingredient index container columns is-multiline is-fluid">
	<div class="index-bahan-makanan container columns is-fullwidth is-fluid is-multiline">
		<div class="header index-bahan-makanan column is-3">
			Bahan Makanan
			<a href="{{ url('/bahan-makanan') }}" class="is-hidden-desktop is-hidden-tablet is-pulled-right"><button class="mobile button is-info">Lihat lengkap</button></a>
		</div>
		<div class="header index-bahan-makanan column is-9 is-hidden-mobile">
			<a href="{{ url('/bahan-makanan') }}"><button class="button is-info">Lihat lengkap</button></a>
		</div>
		<div class="index-bahan-makanan column is-3">
			<figure class="index image is-square" data-name="{{$randomIngredient->name}}">
			  <a href="#"><img src="{{ url($randomIngredient->picture) }}"/></a>
			</figure>
		</div>
		<div class="index-bahan-makanan-menu column is-9 is-hidden-mobile">
			<div class="index-bahan-makanan menu columns">
				@foreach($randomIngredients as $randomIngredient)
				<div class="index-bahan-makanan-menu column is-3" data-name="{{ $randomIngredient->name }}">
					<a href="#"><img src="{{ url($randomIngredient->picture) }}"/></a>
				</div>
				@endforeach
			</div>
		</div>
	</div>	
</div>

@endsection