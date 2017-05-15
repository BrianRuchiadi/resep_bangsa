@extends('layouts.user.app-main')
@section('content')
<div class="main-image-wrapper column is-hidden-mobile">
	<div class="ingredient-main-image column">
		<div class="half-black layer">
		</div>
		<span>Bahan Makanan</span>
	</div>
	
</div>
<div class="product container columns is-multiline is-fluid ">
	@foreach($ingredients as $ingredient)
	<div class="product-row column is-3">
		<div class="product card">
		  <div class="white card-image" data-name="{{ $ingredient->name }}">
		    <figure class="image is-4by3">
		      <i class="fa fa-flag" aria-hidden="true"></i>
		      <img src="{{$ingredient->picture}}" alt="Image">
		    </figure>
		  </div>
		  <div class="card-content">
		    <div class="ingredient content">
		      <h3> {{ $ingredient->name }} </h3>
			      <div class="content-summary-statistic">
				      <i class="flip fa fa-book" aria-hidden="true"></i> {{$ingredient->used_in}}
				      <br>
				      <small>@php echo substr($ingredient->updated_at,0,10) @endphp</small>
				      <br>
				      
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
	  <a class="pagination-previous" href="{{ $ingredients->previousPageUrl() }}">Previous</a>
	  <ul class="pagination-list">
	    <li>
	      <a class="pagination-link" href="{{ $ingredients->url(1) }}">1</a>
	    </li>
	    <li>
	      <span class="pagination-ellipsis">&hellip;</span>
	    </li>
	    <li class="is-hidden-mobile">
	      @if($ingredients->currentPage() - 2 > 1)
	      	<a class="pagination-link" href="{{ $ingredients->url($ingredients->currentPage() - 2) }}">{{ $ingredients->currentPage() - 2 }}</a>
	      @endif
	    </li>
	    <li>
	      @if($ingredients->currentPage() - 1 > 1)
	      	<a class="pagination-link" href="{{ $ingredients->url($ingredients->currentPage() - 1) }}">{{ $ingredients->currentPage() - 1 }}</a>
	      @endif
	    </li>
	    <li>
	      <a class="pagination-link is-current">{{ $ingredients->currentPage() }}</a>
	    </li>
	    <li>
	      @if($ingredients->currentPage() + 1 < $ingredients->lastPage())
	      	<a class="pagination-link" href="{{ $ingredients->url($ingredients->currentPage() + 1) }}">{{ $ingredients->currentPage() + 1 }}</a>
	      @endif
	    </li>
	    <li class="is-hidden-mobile">
	      @if($ingredients->currentPage() + 2 < $ingredients->lastPage())
	      	<a class="pagination-link" href="{{ $ingredients->url($ingredients->currentPage() + 2) }}">{{ $ingredients->currentPage() + 2 }}</a>
	      @endif
	    </li>
	    <li>
	      <span class="pagination-ellipsis">&hellip;</span>
	    </li>
	    <li>
	      <a class="pagination-link" href="{{ $ingredients->url($ingredients->lastPage()) }}">{{ $ingredients->lastPage() }}</a>
	    </li>
	  </ul>
	  <a class="pagination-next" href="{{ $ingredients->nextPageUrl() }}">Next page</a>
	</nav>
</div>

@endsection