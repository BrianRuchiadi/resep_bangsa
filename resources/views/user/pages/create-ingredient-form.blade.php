@extends('layouts.user.app-main')
@section('content')


<form method="POST" action="{{ url('/kontribusi/bahan-makanan') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	<table>
		<tr>
			<td>Nama Bahan</td>
			<td><input class="input" type="text" name="ingredient_name" required></td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td><input class="input" type="file" name="ingredient_picture" accept="image/png" onchange="loadFile(event)" required />
			<figure class="input image is-4by3">
				<img id="output"/>
			</figure>
			</td>
		</tr>
		<tr>
			<td></td>
			<td >
			<button class="button is-warning" type="submit">tambahkan</button>
			</td>
		</tr>	
	</table>
</form>
@endsection