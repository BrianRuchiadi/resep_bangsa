@extends('layouts.user.app-main')
@section('content')
<div class="main-image-wrapper column is-hidden-mobile">
	<div class="food-main-image column">
		<div class="half-black layer">
		</div>
		<span>Makanan</span>
	</div>
	
</div>
<div class="product container columns is-multiline is-fluid ">
	@foreach($foods as $food)
	<div class="product-row column is-3">
		<div class="product card">
		  <div class="white card-image" data-name="{{ $food->name }}">
		  	<i class="fa fa-flag" aria-hidden="true" onclick="openfoodReport({{ $food->id }})"></i>	
		    <figure class="image is-4by3"> 
		      <img src="{{$food->picture}}" alt="Image">
		    </figure>
		  </div>
		  <div class="card-content">
		    <div class="food content">
		      <h3> {{ $food->name }} </h3>
			      <div class="content-summary-statistic">
				      <i class="flip fa fa-book" aria-hidden="true"></i> {{$food->used_in}}
				      <br>
				      <small>@php echo substr($food->updated_at,0,10) @endphp</small>
				      <br>
				      				      
				      <div class="report modal" id="food_{{ $food->id }}">
				        <div class="report modal-background"></div>
				        <div class="report modal-content">
				        	<form method="post" action="{{ url('/laporan/bahan-makanan') }}">
				         	{{ csrf_field() }}
				          		<table>
				           			<tr>
				            			<td colspan="2"><h1> Melaporkan Bahan Makanan "{{ $food->name }}"</h1></td>
				           			</tr>
				           			@if(count($errors) > 0)
				           			<tr>
				          		  		<td colspan="2" class="error">{{ $errors->first() }}</td>
				           			</tr>
				           			@endif
				           			<tr>
				            			<td>Kategori</td>
				            			<td><span class="select">
				              				<select name="kategori_laporan">
				               				@foreach($reportTypes as $reportType)
				               				<option value="{{ $reportType->id }}">{{$reportType->name }}
				               				</option>
				               				@endforeach
				              				</select>
				             			</span></td>
				           			</tr>
				           			<tr>
							            <td>Deskripsi</td>
							            <td><textarea class="textarea" name="deskripsi_laporan" id="deskripsi_laporan"></textarea></td>
							        </tr>
							        @if(!Auth::user())
							        <tr>
							            <td>Email</td>
				            			<td><input type="email" id="email" class="input" name="email" onkeyup="checkEmail()" onmouseleave="checkEmail()"></td>
				           			</tr>
				           			@endif
				           			<tr>
				         		   		<td></td>
				            			<td><button type="submit" id="submit-food-report"class="button is-info">Laporkan</button></td>
					           		</tr>
					          	</table>
					        </form>
					          <!-- Any other Bulma elements you want -->
					    </div>
					   </div>
			      </div>
		    </div>
		  </div>
		</div>
	</div>
	@endforeach
	<!-- end of card -->
</div>
<div class="paginate column">		
	<nav class="pagination">
	  <a class="pagination-previous" href="{{ $foods->previousPageUrl() }}">Previous</a>
	  <ul class="pagination-list">
	    <li>
	      <a class="pagination-link" href="{{ $foods->url(1) }}">1</a>
	    </li>
	    <li>
	      <span class="pagination-ellipsis">&hellip;</span>
	    </li>
	    <li class="is-hidden-mobile">
	      @if($foods->currentPage() - 2 > 1)
	      	<a class="pagination-link" href="{{ $foods->url($foods->currentPage() - 2) }}">{{ $foods->currentPage() - 2 }}</a>
	      @endif
	    </li>
	    <li>
	      @if($foods->currentPage() - 1 > 1)
	      	<a class="pagination-link" href="{{ $foods->url($foods->currentPage() - 1) }}">{{ $foods->currentPage() - 1 }}</a>
	      @endif
	    </li>
	    <li>
	      <a class="pagination-link is-current">{{ $foods->currentPage() }}</a>
	    </li>
	    <li>
	      @if($foods->currentPage() + 1 < $foods->lastPage())
	      	<a class="pagination-link" href="{{ $foods->url($foods->currentPage() + 1) }}">{{ $foods->currentPage() + 1 }}</a>
	      @endif
	    </li>
	    <li class="is-hidden-mobile">
	      @if($foods->currentPage() + 2 < $foods->lastPage())
	      	<a class="pagination-link" href="{{ $foods->url($foods->currentPage() + 2) }}">{{ $foods->currentPage() + 2 }}</a>
	      @endif
	    </li>
	    <li>
	      <span class="pagination-ellipsis">&hellip;</span>
	    </li>
	    <li>
	      <a class="pagination-link" href="{{ $foods->url($foods->lastPage()) }}">{{ $foods->lastPage() }}</a>
	    </li>
	  </ul>
	  <a class="pagination-next" href="{{ $foods->nextPageUrl() }}">Next page</a>
	</nav>
</div>

@if(Session::has('food-report-success'))
	<script>
		swal({
		  title: 'Laporan Berhasil!',
		  text: '{{ Session::get("food-report-success") }}',
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

@endsection