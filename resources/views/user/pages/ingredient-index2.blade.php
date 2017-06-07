@extends('layouts.user.app-main2')

@section('sub-title')
	Bahan
@endsection

@section('content')
<div class="split columns">
	<div class="left column is-1 is-hidden-mobile">
		<ul>
			<li> A </li>
			<li> B </li>
			<li> C </li>
			<li> D </li>
			<li> E </li>
			<li> F </li>
			<li> G </li>
			<li> H </li>
			<li> I </li>
			<li> J </li>
			<li> K </li>
			<li> L </li>
			<li> M </li>
			<li> N </li>
			<li> O </li>
			<li> P </li>
			<li> Q </li>
			<li> R </li>
			<li> S </li>
			<li> T </li>
			<li> U </li>
			<li> V </li>
			<li> W </li>
			<li> X </li>
			<li> Y </li>
			<li> Z </li>
		</ul>
	</div>
	<div class="right column is-11 is-hidden-mobile">
		<div class="top bar column is-fullwidth">
			<div class="holder">
				<input type="text" class="input" placeholder="Cari Bahan ...">
				<i class="fa fa-search" aria-hidden="true"></i>
			</div>
			<table class="information table is-narrow">
				<thead>
					<th colspan="2">   </th>
				</thead>
				<tbody>
					<tr>
						<td> Jumlah Bahan </td>
						<td> 75 </td>
					</tr>

					<tr>
						<td> Kontribusi Bahan </td>
						<td>
							<a href="#">
								<button class="button is-primary">
								<i class="fa fa-plus" aria-hidden="true"></i>
									Kontribusi Bahan
								</button>
							</a>
						</td>
					</tr>
					<tr>
						<td> Request Bahan </td>
						<td>
							<a href="#">
								<button class="button is-primary">
								<i class="fa fa-plus" aria-hidden="true"></i>
									Request Bahan
								</button>
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="main bar columns is-fullwidth is-gapless is-multiline">
			<div class="main bar content column is-3">
				<h1 class="title block">Jagung</h1>
				<img src="{{ url('assets/images/food/ingredients/1494831928_jagung.png') }}">
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Jagung</h1>
				<img src="{{ url('assets/images/food/ingredients/1494831928_jagung.png') }}">
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Jagung</h1>
				<img src="{{ url('assets/images/food/ingredients/1494831928_jagung.png') }}">
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Jagung</h1>
				<img src="{{ url('assets/images/food/ingredients/1494831928_jagung.png') }}">
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Jagung</h1>
				<img src="{{ url('assets/images/food/ingredients/1494831928_jagung.png') }}">
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Jagung</h1>
				<img src="{{ url('assets/images/food/ingredients/1494831928_jagung.png') }}">
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Jagung</h1>
				<img src="{{ url('assets/images/food/ingredients/1494831928_jagung.png') }}">
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Jagung</h1>
				<img src="{{ url('assets/images/food/ingredients/1494831928_jagung.png') }}">
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Jagung</h1>
				<img src="{{ url('assets/images/food/ingredients/1494831928_jagung.png') }}">
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Jagung</h1>
				<img src="{{ url('assets/images/food/ingredients/1494831928_jagung.png') }}">
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Jagung</h1>
				<img src="{{ url('assets/images/food/ingredients/1494831928_jagung.png') }}">
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Jagung</h1>
				<img src="{{ url('assets/images/food/ingredients/1494831928_jagung.png') }}">
			</div>

		</div>
		<div class="bottom bar column is-fullwidth">
			<nav class="pagination is-left">
			  	<ul class="pagination-list">
			  		<li><a class="pagination-link">First</a></li>
			  		<li><a class="pagination-link">Previous</a></li>
				    <li><a class="pagination-link">1</a></li>
				    <li><a class="pagination-link">2</a></li>
				    <li><a class="pagination-link is-current">3</a></li>
				    <li><a class="pagination-link">4</a></li>
				    <li><a class="pagination-link">5</a></li>
				    <li><a class="pagination-link">Next</a></li>
				    <li><a class="pagination-link">Last</a></li>
			  </ul>
			</nav>
		</div>
	</div>
</div>
@endsection