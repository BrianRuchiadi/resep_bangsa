@extends('layouts.user.app-main2')

@section('sub-title')
	Resep
@endsection

@section('content')
<div class="resep split columns">
	<!-- Mobile version -->
	<div class="columns is-mobile is-multiline is-hidden-tablet">
		<div class="top-bar mobile column">
			<input type="text" class="input" placeholder="Cari Resep ...">
			<i class="fa fa-search" aria-hidden="true"></i>
			<div class="index-holder">
				Filter By :
			</div>
			<div class="index-holder">
				<span>A</span><span>
					B</span><span>
					C</span><span>
					D</span><span>
					E</span><span>
					F</span><span>
					G</span><span>
					H</span><span>
					I</span><span>
					J</span><span>
					K</span><span>
					L</span><span>
					M</span><span>
					N</span><span>
					O</span><span>
					P</span><span>
					Q</span><span>
					R</span><span>
					S</span><span>
					T</span><span>
					U</span><span>
					V</span><span>
					W</span><span>
					X</span><span>
					Y</span><span>
					Z</span>
			</div>
		</div>
		<div class="recipe-mobile column is-12 is-fullwidth">
			<img src="{{ url('assets/images/food/gado_gado.jpeg') }}"/>
			<i class="fa fa-clock-o" aria-hidden="true"></i>
			<h1 class="recipe-mobile by">By Brian Ruchiadi</h1>
			<h1 class="recipe-mobile title">Gado Gado</h1>
			<button class="button is-primary">Lihat Lengkap</button>
			<img class="cook-icon mobile" src="{{ asset('assets/images/kitchen-icon/first-second-courses/87.png') }}"/>
		</div>
		<div class="recipe-mobile column is-12 is-fullwidth">
			<img src="{{ url('assets/images/food/gado_gado.jpeg') }}"/>
			<i class="fa fa-clock-o" aria-hidden="true"></i>
			<h1 class="recipe-mobile by">By Brian Ruchiadi</h1>
			<h1 class="recipe-mobile title">Gado Gado</h1>
			<button class="button is-primary">Lihat Lengkap</button>
			<img class="cook-icon mobile" src="{{ asset('assets/images/kitchen-icon/first-second-courses/87.png') }}"/>
		</div>
		<div class="recipe-mobile column is-12 is-fullwidth">
			<img src="{{ url('assets/images/food/gado_gado.jpeg') }}"/>
			<i class="fa fa-clock-o" aria-hidden="true"></i>
			<h1 class="recipe-mobile by">By Brian Ruchiadi</h1>
			<h1 class="recipe-mobile title">Gado Gado</h1>
			<button class="button is-primary">Lihat Lengkap</button>
			<img class="cook-icon mobile" src="{{ asset('assets/images/kitchen-icon/first-second-courses/87.png') }}"/>
		</div>
		<div class="recipe-mobile column is-12 is-fullwidth">
			<img src="{{ url('assets/images/food/gado_gado.jpeg') }}"/>
			<i class="fa fa-clock-o" aria-hidden="true"></i>
			<h1 class="recipe-mobile by">By Brian Ruchiadi</h1>
			<h1 class="recipe-mobile title">Gado Gado</h1>
			<button class="button is-primary">Lihat Lengkap</button>
			<img class="cook-icon mobile" src="{{ asset('assets/images/kitchen-icon/first-second-courses/87.png') }}"/>
		</div>
		<div class="recipe-mobile column is-12 is-fullwidth">
			<img src="{{ url('assets/images/food/gado_gado.jpeg') }}"/>
			<i class="fa fa-clock-o" aria-hidden="true"></i>
			<h1 class="recipe-mobile by">By Brian Ruchiadi</h1>
			<h1 class="recipe-mobile title">Gado Gado</h1>
			<button class="button is-primary">Lihat Lengkap</button>
			<img class="cook-icon mobile" src="{{ asset('assets/images/kitchen-icon/first-second-courses/87.png') }}"/>
		</div>
		<div class="recipe-mobile column is-12 is-fullwidth">
			<img src="{{ url('assets/images/food/gado_gado.jpeg') }}"/>
			<i class="fa fa-clock-o" aria-hidden="true"></i>
			<h1 class="recipe-mobile by">By Brian Ruchiadi</h1>
			<h1 class="recipe-mobile title">Gado Gado</h1>
			<button class="button is-primary">Lihat Lengkap</button>
			<img class="cook-icon mobile" src="{{ asset('assets/images/kitchen-icon/first-second-courses/87.png') }}"/>
		</div>
		<nav class="pagination mobile is-left is-medium ">
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
	<!-- End of mobile -->
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
		<div class="top bar resep column is-fullwidth">
			<div class="holder">
				<input type="text" class="input" placeholder="Cari Resep ...">
				<i class="fa fa-search" aria-hidden="true"></i>
			</div>
			<table class="information table is-narrow">
				<thead>
					<th colspan="2">   </th>
				</thead>
				<tbody>
					<tr>
						<td> Jumlah Resep </td>
						<td> 75 </td>
					</tr>

					<tr>
						<td> Kontribusi Resep </td>
						<td>
							<a href="#">
								<button class="button is-primary">
								<i class="fa fa-plus" aria-hidden="true"></i>
									Kontribusi Resep
								</button>
							</a>
						</td>
					</tr>
					<tr>
						<td> Request Resep </td>
						<td>
							<a href="#">
								<button class="button is-primary">
								<i class="fa fa-plus" aria-hidden="true"></i>
									Request Resep
								</button>
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="main bar memasak columns is-fullwidth is-gapless is-multiline">
			<div class="main bar resep column is-12">
				<div class="memasak left column is-3">
					<img src="{{ url('assets/images/food/gado_gado.jpeg') }}"/>
				</div><div class="memasak right column is-9">
					<h1> Gado Gado 
						<img class="cook-icon" src="{{ asset('assets/images/kitchen-icon/first-second-courses/87.png') }}"/>
					</h1>
					<strong> By Brian Ruchiadi </strong>
					<div class="resep-content column is-6">
						<table class="table is-narrow">
							<tr>
								<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
								<td>Waktu</td>
								<td> : </td>	
								<td>15 Menit</td>
							</tr>
							<tr>
								<td><i class="fa fa-bar-chart" aria-hidden="true"></i></td>
								<td>Kesulitan</td>
								<td> : </td>
								<td>Tidak Sulit</td>
							</tr>
							<tr>
								<td><i class="fa fa-shopping-basket" aria-hidden="true"></i></td>
								<td>Jumlah Bahan</td>
								<td> : </td>
								<td>8</td>
							</tr>
							<tr>
								<td><i class="fa fa-money" aria-hidden="true"></i></td>
								<td>Estimasi Biaya / porsi</td>
								<td> : </td>
								<td>rp.4.000</td>
							</tr>
						</table>
					</div><div class="resep-content column is-6">
						Sudah Dimasak oleh:
						<br/>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
        					<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						+ 1000 lainnya 

						<div class="rating">
							Rating : 70%
							<div class="rating-bar holder">
								<div class="rating-bar"></div>
							</div>
						</div>
					</div>
					<button class="memasak button is-primary"><a href="#">Lihat lengkap</a></button>
				</div>
			</div><div class="main bar resep column is-12">
				<div class="memasak left column is-3">
					<img src="{{ url('assets/images/food/gado_gado.jpeg') }}"/>
				</div><div class="memasak right column is-9">
					<h1> Gado Gado 
						<img class="cook-icon" src="{{ asset('assets/images/kitchen-icon/first-second-courses/87.png') }}"/>
					</h1>
					<strong> By Brian Ruchiadi </strong>
					<div class="resep-content column is-6">
						<table class="table is-narrow">
							<tr>
								<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
								<td>Waktu</td>
								<td> : </td>	
								<td>15 Menit</td>
							</tr>
							<tr>
								<td><i class="fa fa-bar-chart" aria-hidden="true"></i></td>
								<td>Kesulitan</td>
								<td> : </td>
								<td>Tidak Sulit</td>
							</tr>
							<tr>
								<td><i class="fa fa-shopping-basket" aria-hidden="true"></i></td>
								<td>Jumlah Bahan</td>
								<td> : </td>
								<td>8</td>
							</tr>
							<tr>
								<td><i class="fa fa-money" aria-hidden="true"></i></td>
								<td>Estimasi Biaya / porsi</td>
								<td> : </td>
								<td>rp.4.000</td>
							</tr>
						</table>
					</div><div class="resep-content column is-6">
						Sudah Dimasak oleh:
						<br/>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
        					<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						+ 1000 lainnya 

						<div class="rating">
							Rating : 70%
							<div class="rating-bar holder">
								<div class="rating-bar"></div>
							</div>
						</div>
					</div>
					<button class="memasak button is-primary"><a href="#">Lihat lengkap</a></button>
				</div>
			</div><div class="main bar resep column is-12">
				<div class="memasak left column is-3">
					<img src="{{ url('assets/images/food/gado_gado.jpeg') }}"/>
				</div><div class="memasak right column is-9 is-gapless">
					<h1> Gado Gado 
						<img class="cook-icon" src="{{ asset('assets/images/kitchen-icon/first-second-courses/87.png') }}"/>
					</h1>
					<strong> By Brian Ruchiadi </strong>
					<div class="resep-content column is-6">
						<table class="table is-narrow">
							<tr>
								<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
								<td>Waktu</td>
								<td> : </td>	
								<td>15 Menit</td>
							</tr>
							<tr>
								<td><i class="fa fa-bar-chart" aria-hidden="true"></i></td>
								<td>Kesulitan</td>
								<td> : </td>
								<td>Tidak Sulit</td>
							</tr>
							<tr>
								<td><i class="fa fa-shopping-basket" aria-hidden="true"></i></td>
								<td>Jumlah Bahan</td>
								<td> : </td>
								<td>8</td>
							</tr>
							<tr>
								<td><i class="fa fa-money" aria-hidden="true"></i></td>
								<td>Estimasi Biaya / porsi</td>
								<td> : </td>
								<td>rp.4.000</td>
							</tr>
						</table>
					</div><div class="resep-content column is-6">
						Sudah Dimasak oleh:
						<br/>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
        					<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						+ 1000 lainnya 

						<div class="rating">
							Rating : 70%
							<div class="rating-bar holder">
								<div class="rating-bar"></div>
							</div>
						</div>
					</div>
					<button class="memasak button is-primary"><a href="#">Lihat lengkap</a></button>
				</div>
			</div><div class="main bar resep column is-12">
				<div class="memasak left column is-3">
					<img src="{{ url('assets/images/food/gado_gado.jpeg') }}"/>
				</div><div class="memasak right column is-9">
					<h1> Gado Gado 
						<img class="cook-icon" src="{{ asset('assets/images/kitchen-icon/first-second-courses/87.png') }}"/>
					</h1>
					<strong> By Brian Ruchiadi </strong>
					<div class="resep-content column is-6">
						<table class="table is-narrow">
							<tr>
								<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
								<td>Waktu</td>
								<td> : </td>	
								<td>15 Menit</td>
							</tr>
							<tr>
								<td><i class="fa fa-bar-chart" aria-hidden="true"></i></td>
								<td>Kesulitan</td>
								<td> : </td>
								<td>Tidak Sulit</td>
							</tr>
							<tr>
								<td><i class="fa fa-shopping-basket" aria-hidden="true"></i></td>
								<td>Jumlah Bahan</td>
								<td> : </td>
								<td>8</td>
							</tr>
							<tr>
								<td><i class="fa fa-money" aria-hidden="true"></i></td>
								<td>Estimasi Biaya / porsi</td>
								<td> : </td>
								<td>rp.4.000</td>
							</tr>
						</table>
					</div><div class="resep-content column is-6">
						Sudah Dimasak oleh:
						<br/>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
        					<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						+ 1000 lainnya 

						<div class="rating">
							Rating : 70%
							<div class="rating-bar holder">
								<div class="rating-bar"></div>
							</div>
						</div>
					</div>
					<button class="memasak button is-primary"><a href="#">Lihat lengkap</a></button>
				</div>
			</div><div class="main bar resep column is-12">
				<div class="memasak left column is-3">
					<img src="{{ url('assets/images/food/gado_gado.jpeg') }}"/>
				</div><div class="memasak right column is-9">
					<h1> Gado Gado 
						<img class="cook-icon" src="{{ asset('assets/images/kitchen-icon/first-second-courses/87.png') }}"/>
					</h1>
					<strong> By Brian Ruchiadi </strong>
					<div class="resep-content column is-6">
						<table class="table is-narrow">
							<tr>
								<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
								<td>Waktu</td>
								<td> : </td>	
								<td>15 Menit</td>
							</tr>
							<tr>
								<td><i class="fa fa-bar-chart" aria-hidden="true"></i></td>
								<td>Kesulitan</td>
								<td> : </td>
								<td>Tidak Sulit</td>
							</tr>
							<tr>
								<td><i class="fa fa-shopping-basket" aria-hidden="true"></i></td>
								<td>Jumlah Bahan</td>
								<td> : </td>
								<td>8</td>
							</tr>
							<tr>
								<td><i class="fa fa-money" aria-hidden="true"></i></td>
								<td>Estimasi Biaya / porsi</td>
								<td> : </td>
								<td>rp.4.000</td>
							</tr>
						</table>
					</div><div class="resep-content column is-6">
						Sudah Dimasak oleh:
						<br/>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
        					<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						<div class="half-circle">
							<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
						</div>
						+ 1000 lainnya 

						<div class="rating">
							Rating : 70%
							<div class="rating-bar holder">
								<div class="rating-bar"></div>
							</div>
						</div>
					</div>
					<button class="memasak button is-primary"><a href="#">Lihat lengkap</a></button>
				</div>
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