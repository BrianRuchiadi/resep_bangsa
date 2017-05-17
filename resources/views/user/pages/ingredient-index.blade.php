@extends('layouts.user.app-main')
@section('title')
	Bahan Makanan
@endsection
@section('content')
<div class="main-image-wrapper column is-hidden-mobile">
	<div class="ingredient-main-image column">
		<div class="half-black layer">
		</div>
		<span>Bahan Makanan</span>
	</div>
	
</div>
<div class="product container columns is-multiline is-fluid ">
	@if($type == 'all')
		@foreach($ingredients as $ingredient)
		<div class="product-row column is-3">
			<div class="product card">
			  <div class="white card-image" data-name="{{ $ingredient->name }}">
			    <figure class="image is-4by3"> 
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
					      <i class="fa fa-flag" aria-hidden="true" onclick="openIngredientReport({{ $ingredient->id }})"></i>	
					      <i class="fa fa-pencil-square-o" aria-hidden="true" onclick="openEditIngredient({{$ingredient->id}})"></i>
					      <!-- report -->	      
					      <div class="report modal" id="ingredient_{{ $ingredient->id }}">
					        <div class="report modal-background"></div>
					        <div class="report modal-content">
					        	<form method="post" action="{{ url('/laporan/bahan-makanan') }}">
					         	{{ csrf_field() }}
					          		<table>
					           			<tr>
					            			<td colspan="2"><h1> Melaporkan Bahan Makanan "{{ $ingredient->name }}"</h1></td>
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
					           			@if(Auth::user())
					           			<tr>
					           				<input type="hidden" name="email" value="{{ Auth::user()->email }}">
					           			</tr>
					           			@endif
					           			<tr>
					         		   		<td></td>
					            			<td><button type="submit" id="submit-ingredient-report"class="button is-info">Laporkan</button></td>
						           		</tr>
						          	</table>
						        </form>
						        <button class="report modal-close" onclick="closeIngredientReport({{ $ingredient->id }})"></button>
						        <!-- Any other Bulma elements you want -->
						    </div>
						   </div>
						   <!-- end of report -->
						   <!-- edit ingredient -->
						   <div class="ingredient modal" id="ingredient_{{ $ingredient->id }}_edit">
					        <div class="ingredient modal-background"></div>
					        <div class="ingredient modal-content">
					        	<form method="post" action="{{ url('/laporan/bahan-makanan') }}">
					         	{{ csrf_field() }}
					          		<table>
					           			<tr>
					            			<td colspan="2"><h1> Edit Bahan Makanan "{{ $ingredient->name }}"</h1></td>
					           			</tr>
					           			@if(count($errors) > 0)
					           			<tr>
					          		  		<td colspan="2" class="error">{{ $errors->first() }}</td>
					           			</tr>
					           			@endif
					           			<tr>
					            			<td>Nama Makanan</td>
					            			<td><input class="input" type="text" name="ingredient_name" value="{{ $ingredient->name }}"></td>
					           			</tr>
					           			<tr>
								            <td>Penjelasan</td>
								            <td><textarea class="textarea" name="penjelasan_edit" id="deskripsi_laporan"></textarea></td>
								        </tr>
								        @if(!Auth::user())
								        <tr>
								            <td>Email</td>
					            			<td><input type="email" id="email" class="input" name="email" onkeyup="checkEmail()" onmouseleave="checkEmail()"></td>
					           			</tr>
					           			@endif
					           			@if(Auth::user())
					           			<tr>
					           				<input type="hidden" name="email" value="{{ Auth::user()->email }}">
					           			</tr>
					           			@endif
					           			<tr>
					         		   		<td></td>
					            			<td><button type="submit" id="submit-ingredient-report"class="button is-info">Laporkan</button></td>
						           		</tr>
						          	</table>
						        </form>
						        <button class="ingredient modal-close" onclick="closeEditIngredient({{ $ingredient->id }})"></button>
						        <!-- Any other Bulma elements you want -->
						    </div>
						   </div>
						   <!-- end of edit ingredient -->
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
	<!-- detail page below -->
	@else
		@if($ingredientExists)
			<div class="product-row column is-3">
				<div class="product card">
				  <div class="white card-image" data-name="{{ $ingredient->name }}">
				    <figure class="image is-4by3"> 
				      <img src="../{{$ingredient->picture}}" alt="Image">
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
						      <i class="fa fa-flag" aria-hidden="true" onclick="openIngredientReport({{ $ingredient->id }})"></i>	
						      <i class="fa fa-pencil-square-o" aria-hidden="true" onclick="openEditIngredient({{$ingredient->id}})"></i>
						      <!-- report -->				      
						      <div class="report modal" id="ingredient_{{ $ingredient->id }}">
						        <div class="report modal-background"></div>
						        <div class="report modal-content">
						        	<form method="post" action="{{ url('/laporan/bahan-makanan') }}">
						         	{{ csrf_field() }}
						          		<table>
						           			<tr>
						            			<td colspan="2"><h1> Melaporkan Bahan Makanan "{{ $ingredient->name }}"</h1></td>
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
						           			@if(Auth::user())
						           			<tr>
						           				<input type="hidden" name="email" value="{{ Auth::user()->email }}">
						           			</tr>
						           			@endif
						           			<tr>
						         		   		<td></td>
						            			<td><button type="submit" id="submit-ingredient-report"class="button is-info">Laporkan</button></td>
							           		</tr>
							          	</table>
							        </form>
							        <button class="modal-close" onclick="closeIngredientReport({{ $ingredient->id }})"></button>
							        <!-- Any other Bulma elements you want -->
							    </div>
							   </div>
					      </div>
					      <!-- end of report -->
					      <!-- ingredient edit -->
					      <div class="ingredient modal" id="ingredient_{{ $ingredient->id }}_edit">
					        <div class="ingredient modal-background"></div>
					        <div class="ingredient modal-content">
					        	<form method="post" action="{{ url('/laporan/bahan-makanan') }}">
					         	{{ csrf_field() }}
					          		<table>
					           			<tr>
					            			<td colspan="2"><h1> Edit Bahan Makanan "{{ $ingredient->name }}"</h1></td>
					           			</tr>
					           			@if(count($errors) > 0)
					           			<tr>
					          		  		<td colspan="2" class="error">{{ $errors->first() }}</td>
					           			</tr>
					           			@endif
					           			<tr>
					            			<td>Nama Makanan</td>
					            			<td><input class="input" type="text" name="ingredient_name" value="{{ $ingredient->name }}"></td>
					           			</tr>
					           			<tr>
								            <td>Penjelasan</td>
								            <td><textarea class="textarea" name="penjelasan_edit" id="deskripsi_laporan"></textarea></td>
								        </tr>
								        @if(!Auth::user())
								        <tr>
								            <td>Email</td>
					            			<td><input type="email" id="email" class="input" name="email" onkeyup="checkEmail()" onmouseleave="checkEmail()"></td>
					           			</tr>
					           			@endif
					           			@if(Auth::user())
					           			<tr>
					           				<input type="hidden" name="email" value="{{ Auth::user()->email }}">
					           			</tr>
					           			@endif
					           			<tr>
					         		   		<td></td>
					            			<td><button type="submit" id="submit-ingredient-report"class="button is-info">Laporkan</button></td>
						           		</tr>
						          	</table>
						        </form>
						        <button class="ingredient modal-close" onclick="closeEditIngredient({{ $ingredient->id }})"></button>
						        <!-- Any other Bulma elements you want -->
						    </div>
						   </div>
						   <!-- end of edit ingredient -->
				    </div>
				  </div>
				</div>
			</div>
		@endif
		</div>
	@endif

@endsection