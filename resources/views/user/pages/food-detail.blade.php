@extends('layouts.user.app-main')
@section('title')
	@if($foodExists)
	{{ $food->name }}
	@endif
	@if(!$foodExists)
	Data Belum Tersedia
	@endif
@endsection
@section('content')
	@if($foodExists)
		<div class="food container columns is-multiline is-fluid is-narrow">
			<img class="image-is3by2" src="{{ url($food->picture) }}"/>
		</div>
		<div class="product container columns is-multiline is-fluid is-narrow">
			<div class="product tabs is-centered is-boxed is-medium">
			  <ul>
			    <li class="sejarah-li">
			      <a onclick="tab('sejarah')">
			        <span class="icon is-small"><i class="fa fa-newspaper-o"></i></span>
			        <span>Sejarah</span>
			      </a>
			    </li>
			    <li class="rasa-li">
			      <a onclick="tab('rasa')">
			        <span class="icon is-small"><i class="fa fa-users"></i></span>
			        <span>Rasa</span>
			      </a>
			    </li>
			    <li class="nutrisi-li">
			      <a onclick="tab('nutrisi')">
			        <span class="icon is-small"><i class="fa fa-flask"></i></span>
			        <span>Fakta Nutrisi</span>
			      </a>
			    </li>
			    <li class="resep-li">
			      <a onclick="tab('resep')">
			        <span class="icon is-small"><i class="fa fa-book"></i></span>
			        <span>Resep Resep</span>
			      </a>
			    </li>
			  </ul>
			</div>
			<br>
		</div>
		<div class="sejarah-content columns is-block">
			<div class="sejarah-content columnn is-block is-multiline">
				<div class="column is-block is-fullwidth">
					<label class="sejarah label">
						<h1 class="has-text-centered">Sejarah</h1>
					</label>
					<p class="is-black">
						{{ $foodOverview->overview_1 }}
					</p>
				</div>
			</div>
			<div class="sejarah-content columnn is-block is-multiline">
				<div class="column is-block is-fullwidth">
					<label class="sejarah label">
						<h1 class="has-text-centered">Deskripsi</h1>
					</label>
					<p class="is-black">
						{{ $foodOverview->overview_2 }}
					</p>
				</div>
			</div>
		</div>

		<div class="rasa-content columns is-block">
			<div class="rasa-content columns is-block is-multiline">
			<div class="rasa field is-block">
				<label class="label">Pedas</label>
				<progress class="pedas progress is-danger" value="{{ $foodPercentage['pedas'] }}" max="100">{{ $foodTaste->spicy }}</progress>
			</div>
			<div class="rasa field is-block">
				<label class="label">Asam</label>
				<progress class="asam progress is-warning" value="{{ $foodPercentage['asam'] }}" max="100">{{ $foodTaste->sour }}</progress>
			</div>
			<div class="rasa field is-block">
				<label class="label">Manis</label>
				<progress class="manis progress is-info" value="{{ $foodPercentage['manis'] }}" max="100">{{ $foodTaste->sweet }}</progress>
			</div>
			<div class="rasa field is-block">
				<label class="label">Pahit</label>
				<progress class="asin progress is-primary" value="{{ $foodPercentage['pahit'] }}" max="100">{{ $foodTaste->bitter }}</progress>
			</div>
		</div>

		</div>

		<div class="nutrisi-content columns is-block">
			Nutrisi
		</div>

		<div class="resep-content columns is-block">
			Resep
		</div>
	@endif
	@if(!$foodExists)
	Not exist
	@endif

@endsection