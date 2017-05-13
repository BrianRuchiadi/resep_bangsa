@extends('layouts.user.app-main')
@section('content')


<form>
	<table>
		<tr>
			<td>nama bahan</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>gambar</td>
			<td><input type="file" name="picture" accept="image/png" onchange="loadFile(event)" />
			<figure class="image is-128x128">
				<img id="output"/>
			</figure>
			<script>
				var loadFile = function(event){
					var output = document.getElementById('output');
					output.src = URL.createObjectURL(event.target.files[0]);
				};
			</script>
			</td>
		</tr>
		<tr>
			<td></td>
			<td >
			<button class="button is-primary" type="submit">tambahkan</button>
			</td>
		</tr>	
	</table>
</form>
@endsection