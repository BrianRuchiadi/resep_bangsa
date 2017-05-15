@extends('layouts.user.app-main')
@section('title')
	Permintaan Data Makanan
@endsection
@section('content')
<form method="POST" action="{{ url('/permintaan/data-makanan') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	<table>
		<tr>
			<td colspan="2"><h1> Permintaan Data Makanan </h1></td>
		</tr>
		@if(count($errors) > 0)
		<tr>
			<td colspan="2" class="error">{{ $errors->first() }}</td>
		</tr>
		@endif
		@if(!Auth::user())
		<tr>
			<td>Email</td>
			<td><input class="input" type="email" name="email" placeholder="example@example.com"/></td>
		</tr>
		@endif
		@if(Auth::user())
			<input type="hidden" name="email" value="{{ Auth::user()->email }}">
		@endif
		<tr>
			<td>Nama Makanan</td>
			<td><input class="input" type="text" name="food_name" placeholder="nama makanan"/></td>
		</tr>
		<tr>
			<td></td>
			<td><button class="button is-info" type="submit"> request </button></td>
		</tr>
	</table>
	@if(Session::has('food-request-success'))
		<script>
		swal({
		  title: 'Request Makanan Berhasil Di Simpan!',
		  text: '{{ Session::get("food-request-success") }}',
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