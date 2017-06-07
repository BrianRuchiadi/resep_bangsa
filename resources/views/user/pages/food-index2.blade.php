@extends('layouts.user.app-main2')

@section('sub-title')
	Bahan
@endsection

@section('content')
<div class="split columns">
	<div class="left column is-2 is-hidden-mobile">
		<ul>
			<li> Aceh </li>
			<li> Bali </li>
			<li> Banten </li>
			<li> Bengkulu </li>
			<li> Gorontalo </li>
			<li> Jakarta </li>
			<li> Jambi </li>
			<li> Jawa Barat </li>
			<li> Jawa Tengah </li>
			<li> Jawa Timur </li>
			<li> Kalimantan Barat </li>
			<li> Kalimantan Selatan </li>
			<li> Kalimantan Tengah </li>
			<li> Kalimantan Timur </li>
			<li> Kalimantan Utara </li>
			<li> Kepulauan Bangka Belitung </li>
			<li> Kepulauan Riau </li>
			<li> Lampung </li>
			<li> Maluku </li>
			<li> Maluku Utara </li>
			<li> Nusa Tenggara Barat </li>
			<li> Nusa Tenggara Timur </li>
			<li> Papua </li>
			<li> Papua Barat </li>
			<li> Riau </li>
			<li> Sulawesi Barat </li>
			<li> Sulawesi Selatan </li>
			<li> Sulawesi Tengah </li>
			<li> Sulawesi Tenggara </li>
			<li> Sulawesi Utara </li>
			<li> Sumatera Barat </li>
			<li> Sumatera Selatan </li>
			<li> Sumatera Utara </li>
			<li> Yogyakarta </li>
		</ul>
	</div>
	<div class="right column is-10 is-hidden-mobile">
		<div class="top bar column is-fullwidth">
			<div class="holder">
				<input type="text" class="input" placeholder="Cari Makanan ...">
				<i class="fa fa-search" aria-hidden="true"></i>
			</div>
			<table class="information table is-narrow">
				<thead>
					<th colspan="2">   </th>
				</thead>
				<tbody>
					<tr>
						<td> Jumlah Makanan </td>
						<td> 75 </td>
					</tr>

					<tr>
						<td> Kontribusi Makanan </td>
						<td>
							<a href="#">
								<button class="button is-primary">
								<i class="fa fa-plus" aria-hidden="true"></i>
									Kontribusi Makanan
								</button>
							</a>
						</td>
					</tr>
					<tr>
						<td> Request Makanan </td>
						<td>
							<a href="#">
								<button class="button is-primary">
								<i class="fa fa-plus" aria-hidden="true"></i>
									Request Makanan
								</button>
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="main bar columns is-fullwidth is-gapless is-multiline">
			<div class="main bar content column is-3">
				<h1 class="title block">Gado Gado</h1>
				<img src="{{ url('assets/images/food/gado_gado.jpeg') }}">
				<h4> Sumatera Barat </h4>
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Gado Gado</h1>
				<img src="{{ url('assets/images/food/gado_gado.jpeg') }}">
				<h4> Sumatera Barat </h4>
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Gado Gado</h1>
				<img src="{{ url('assets/images/food/gado_gado.jpeg') }}">
				<h4> Sumatera Barat </h4>
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Gado Gado</h1>
				<img src="{{ url('assets/images/food/gado_gado.jpeg') }}">
				<h4> Sumatera Barat </h4>
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Pecel lele</h1>
				<img src="{{ url('assets/images/food/pecel_lele.png') }}">
				<h4> Sumatera Barat </h4>
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Pecel lele</h1>
				<img src="{{ url('assets/images/food/pecel_lele.png') }}">
				<h4> Sumatera Barat </h4>
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Pecel lele</h1>
				<img src="{{ url('assets/images/food/pecel_lele.png') }}">
				<h4> Sumatera Barat </h4>
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Pecel lele</h1>
				<img src="{{ url('assets/images/food/pecel_lele.png') }}">
				<h4> Sumatera Barat </h4>
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Martabak Keju</h1>
				<img src="{{ url('assets/images/food/martabak_keju.png') }}">
				<h4> Sumatera Barat </h4>
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Martabak Keju</h1>
				<img src="{{ url('assets/images/food/martabak_keju.png') }}">
				<h4> Sumatera Barat </h4>
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Martabak Keju</h1>
				<img src="{{ url('assets/images/food/martabak_keju.png') }}">
				<h4> Sumatera Barat </h4>
			</div>
			<div class="main bar content column is-3">
				<h1 class="title block">Martabak Keju</h1>
				<img src="{{ url('assets/images/food/martabak_keju.png') }}">
				<h4> Sumatera Barat </h4>
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