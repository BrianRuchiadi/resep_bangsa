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
				<div class="columns">
					<progress class="pedas progress is-danger" value="{{ $foodPercentage['pedas'] }}" max="100"></progress> 
					<i class="fa fa-thumbs-up" onclick="openVotingModal('pedas')"></i>
				</div>
			</div>
			<div class="rasa field is-block">
				<label class="label">Asam</label>
				<div class="columns">
					<progress class="asam progress is-warning" value="{{ $foodPercentage['asam'] }}" max="100"></progress>
					<i class="fa fa-thumbs-up" onclick="openVotingModal('asam')"></i>
				</div>
			</div>
			<div class="rasa field is-block">
				<label class="label">Manis</label>
				<div class="columns">
					<progress class="manis progress is-info" value="{{ $foodPercentage['manis'] }}" max="100"></progress>
					<i class="fa fa-thumbs-up" onclick="openVotingModal('manis')"></i>
				</div>
			</div>
			<div class="rasa field is-block">
				<label class="label">Pahit</label>
				<div class="columns">
					<progress class="asin progress is-primary" value="{{ $foodPercentage['pahit'] }}" max="100"></progress>
					<i class="fa fa-thumbs-up" onclick="openVotingModal('pahit')"></i>
				</div>
			</div>
		</div>

		</div>

		<div class="nutrisi-content columns is-block">
			@if(!$foodNutritionExists)
				<p class="has-text-centered is-fullwidth is-black">Data belum tersedia</p>
			@endif
			@if($foodNutritionExists)
			<div class="rasa-content columns is-block is-multiline">
				<div class="rasa field is-block">
					<label class="label">Pedas</label>
					<progress class="pedas progress is-danger" value="{{ $foodPercentage['pedas'] }}" max="100">{{ $foodTaste->spicy }}</progress>
				</div>
			</div>
			@endif
		</div>

		<div class="resep-content columns is-block">
			Resep
		</div>

		<!-- voting modal -->
		<div class="voting modal" id="voting">
	        <div class="voting modal-background"></div>
	        <div class="voting modal-content">
	        	<form method="post" action="{{ url('/kontribusi/rasa-makanan') }}">
	         	{{ csrf_field() }}
	          		<table>
	           			<tr>
	           				<td colspan="2" id="voting_selection"><h1 class="has-text-centered is-fullwidth"></h1></td>
	           			</tr>
				        @if(!Auth::user())
				        @if(count($errors) > 0)
	           			<tr>
	          		  		<td colspan="2" class="error">{{ $errors->first() }}</td>
	           			</tr>
	           			@endif
				        <tr>
				            <td>Email</td>
	            			<td><input type="email" id="email" class="input" name="email" onmouseleave="checkEmailForVoting()" onkeyup="checkEmailForVoting()"></td>
	           			</tr>
	           			@endif
	           			@if(Auth::user())
	           				<input type="hidden" name="email" value="{{ Auth::user()->email }}">
	           			@endif
	           			<tr>
	         		   		<td><input type="hidden" name="vote" id="vote_select" value="0">
	         		   			<input type="hidden" name="food" value="{{ $food->id }}"></td>
	            			<td><button type="submit" id="submit-food-voting" class="button is-info">Benar</button></td>
		           		</tr>
		          	</table>
		        </form>
		        <button class="modal-close" onclick="closeVotingModal()"></button>
		          <!-- Any other Bulma elements you want -->
		    </div>
		</div>
	@if(Session::has('vote-success'))
	<script>
		swal(
		  'Terima Kasih!',
		  'Vote Anda Berhasil Di Rekam',
		  'success'
		)
	</script>
	@endif
	@endif
	@if(!$foodExists)
	Not exist
	@endif

@endsection