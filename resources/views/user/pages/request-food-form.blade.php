@extends('layouts.user.app-main')

@section('content')
<form method="POST" action="{{ url('/kontribusi/bahan-makanan') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	<table>
		<tr>
			<td>Nama Makanan</td>
			<td><input class="input" type="text" name="food_name" placeholder="nama makanan"/></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input class="input" type="email" name="user_email" placeholder="example@example.com"/></td>
		</tr>
		<tr>
			<td></td>
			<td><button class="button is-info" type="submit"> request </button></td>
		</tr>
	</table>
</form>
@endsection