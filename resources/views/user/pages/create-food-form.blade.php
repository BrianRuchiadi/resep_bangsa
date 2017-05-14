@extends('layouts.user.app-main')
@section('content')
<form method="POST" action="{{ url('/kontribusi/bahan-makanan') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	<table>
		<tr>
			<td>Nama Makanan</td>
			<td><input class="input" type="text" name="food_name" placeholder="masukan nama makanan"></td>
		</tr>
		<tr>
			<td>judul overview1 </td>
			<td><input class="input" type="text" name="overview_1_header"/></td>
		</tr>
		<tr>
			<td>penjelasan</td>
			<td><textarea cols="51.2" rows="10" name="overview_1"></textarea></td>
		</tr>
		<tr>
			<td>juduloverview2</td>
			<td><input class="input" type="text" name="overview_2_header"></td></td>
		</tr>
		<tr>
			<td>penjelasan</td>
			<td><textarea cols="51.2" rows="10" name="overview_2"></textarea></td>
		</tr>
		<tr>
			<td>judul overview3</td>
			<td><input class="input" type="text" name="overview_3_header"/></td>
		</tr>
		<tr>
			<td>penjelasan</td>
			<td><textarea cols="51.2" rows="10" name="overview_3"></textarea></td>
		</tr>
		<tr>
			<td>judul overview4</td>
			<td><input class="input" type="text" name="overview_4_header"/></td>
		</tr>
		<tr>
			<td>penjelasan</td>
			<td><textarea cols="51.2" rows="10" name="overview_4"></textarea></td>
		</tr>
		<tr>
			<td>langkah-langkah pembuatan</td>
			<td><input class="input" type="text" name="food_step"/></td>
		</tr>	
		<tr>
			<td>Foto Makanan</td>
			<td><input class="input" type="file" name="ingredient_picture" accept="image/png" onchange="loadFile(event)" required />
			<figure class="input image is-4by3">
				<img id="output"/>
			</figure>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><button class="button is-primary"> kontribusi </button>
	</table>
</form>
@endsection