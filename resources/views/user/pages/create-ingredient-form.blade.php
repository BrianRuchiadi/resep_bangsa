@extends('layouts.user.app-main')
@section('content')


<form method="POST" action="{{ url('/kontribusi/bahan-makanan') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	<table>
		<tr>
			<td colspan="2" class="form-header"> <h1> Kontribusi Bahan Makanan </h1></td>
		</tr>
		<tr>
			@if (count($errors) > 0)
				<td colspan="2" class="error"> * {{ $errors->first() }}</td>
			@endif
		</tr>
		<tr>
			<td>Nama Bahan</td>
			<td><input class="input" type="text" name="ingredient_name" ></td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td><input class="input" type="file" name="ingredient_picture" accept="image/png" onchange="loadFile(event)"  />
			<figure class="input image is-4by3">
				<img id="output"/>
			</figure>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
			<button class="button is-primary" type="submit">Tambahkan</button>
			</td>
		</tr>	
	</table>
</form>
@endsection