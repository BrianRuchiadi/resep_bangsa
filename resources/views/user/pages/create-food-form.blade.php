@extends('layouts.user.app-main')
@section('title')
	Kontribusi Data Makanan
@endsection
@section('content')
<form method="POST" action="{{ url('/kontribusi/data-makanan') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	<table>
		<tr>
			<td colspan="2"><h1> Kontribusi Data Makanan </h1></td>
		</tr>
		@if(count($errors) > 0)
		<tr>
			<td colspan="2" class="error">{{ $errors->first() }}</td>
		</tr>
		@endif
		@if(!Auth::user())
		<tr>
			<td>Email</td>
			<td><input class="input" type="text" name="email" placeholder="masukan email" required></td>
		</tr>
		@endif
		@if(Auth::user())
			<input type="hidden" name="email" value="{{ Auth::user()->email }}">
		@endif
		<tr>
			<td>Nama Makanan</td>
			<td><input class="input" type="text" name="food_name" placeholder="masukan nama makanan" required></td>
		</tr>
		<tr>
			<td>Asal Makanan</td>
			<td><span class="select">
				<select name="food_region">
					@foreach($locations as $location)
						<option value="{{ $location->id }}">{{ $location->name }}</option>
					@endforeach
				</select></span></td>
		</tr>
		<tr>
			<td>Rasa Makanan</td>
			<td><label class="checkbox">
			      <input type="checkbox" name="rasa[asam]" value="asam">Asam<br/>
			      <input type="checkbox" name="rasa[manis]" value="manis">Manis<br/>
			      <input type="checkbox" name="rasa[pedas]" value="pedas">Pedas<br/>
			      <input type="checkbox" name="rasa[pahit]" value="pahit">Pahit
			    </label>
			</td>
		</tr>
		<tr>
			<td>Foto Makanan</td>
			<td><input class="input" type="file" name="food_picture" accept="image/*" onchange="loadFile(event)" required />
					<figure class="input image is-4by3">
						<img id="output"/>
					</figure>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<h1 class="has-text-centered"> Sejarah Makanan </h1>
			</td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td><textarea class="textarea" name="overview_1"></textarea></td>
		</tr>
		<tr>
			<td colspan="2">
				<h1 class="has-text-centered"> Deskripsi </h1>
			</td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td><textarea class="textarea" name="overview_2"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><button class="button is-primary"> kontribusi </button>
		</td>
	</table>
	@if(Session::has('food-add-success'))
		<script>
		swal({
		  title: 'Makanan Berhasil Ditambahkan!',
		  text: '{{ Session::get("food-add-success") }}',
		  timer: 2500
		}).then(
		  function () {},
		  // handling the promise rejection
		  function (dismiss) {
		    if (dismiss === 'timer') {
		    }
		  }
		)
	</script>
	@endif
</form>
@endsection