@extends('layouts.user.app-main2')

@section('sub-title')
	Tips Tips Memasak
@endsection

@section('content')
<div class="split columns">
	<div class="left column is-2 is-hidden-mobile">
		<ul>
			<li> Semua </li>
			<li> Juni 2017 </li>
			<li> Mei 2017 </li>
			<li> April 2017 </li>
			<li> Maret 2017 </li>
			<li> Februari 2017 </li>
			<li> Januari 2017 </li>
		</ul>
	</div>
	<div class="right column is-10 is-hidden-mobile">
		<div class="top bar memasak column is-fullwidth">
			<div class="holder">
				<input type="text" class="input" placeholder="Cari Artikel ...">
				<i class="fa fa-search" aria-hidden="true"></i>
			</div>
			<table class="information table is-narrow">
				<thead>
					<th colspan="2">   </th>
				</thead>
				<tbody>
					<tr>
						<td> Jumlah Artikel </td>
						<td> 75 </td>
					</tr>

					<tr>
						<td> Kontribusi Artikel </td>
						<td>
							<a href="#">
								<button class="button is-primary">
								<i class="fa fa-plus" aria-hidden="true"></i>
									Kontribusi Artikel
								</button>
							</a>
						</td>
					</tr>
					<tr>
						<td> Request Artikel </td>
						<td>
							<a href="#">
								<button class="button is-primary">
								<i class="fa fa-plus" aria-hidden="true"></i>
									Request Artikel
								</button>
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="main bar memasak columns is-fullwidth is-gapless is-multiline">
			<div class="main bar memasak column is-12">
				<div class="memasak left column is-3">
					<img src="{{ url('assets/images/artikel/1.jpg') }}"/>
				</div><div class="memasak right column is-9">
					<h1> Cara Memotong Bawang Dengan Benar </h1>
					<strong> By Brian Ruchiadi </strong>
					<p>Memotong bawang sering kali menjadi masalah di dalam 
						dapur . Kerap kali, kita di buat menangis karenanya.
						Maka di artikel ini ..</p>
					<button class="memasak button is-primary"><a href="#">Lihat lengkap</a></button>
					<div class="misc">
						<i class="fa fa-eye" aria-hidden="true"></i> 1000
						<i class="fa fa-smile-o" aria-hidden="true"></i> 20
						<i class="fa fa-frown-o" aria-hidden="true"></i> 1
						<i class="fa fa-bar-chart" aria-hidden="true"></i> 95.2%
					</div>
				</div>
			</div><div class="main bar memasak column is-12">
				<div class="memasak left column is-3">
					<img src="{{ url('assets/images/artikel/1.jpg') }}"/>
				</div><div class="memasak right column is-9">
					<h1> Cara Memotong Bawang Dengan Benar </h1>
					<strong> By Brian Ruchiadi </strong>
					<p>Memotong bawang sering kali menjadi masalah di dalam 
						dapur . Kerap kali, kita di buat menangis karenanya.
						Maka di artikel ini ..</p>
					<button class="memasak button is-primary"><a href="#">Lihat lengkap</a></button>
					<div class="misc">
						<i class="fa fa-eye" aria-hidden="true"></i> 1000
						<i class="fa fa-smile-o" aria-hidden="true"></i> 20
						<i class="fa fa-frown-o" aria-hidden="true"></i> 1
						<i class="fa fa-bar-chart" aria-hidden="true"></i> 95.2%
					</div>
				</div>
			</div><div class="main bar memasak column is-12">
				<div class="memasak left column is-3">
					<img src="{{ url('assets/images/artikel/1.jpg') }}"/>
				</div><div class="memasak right column is-9">
					<h1> Cara Memotong Bawang Dengan Benar </h1>
					<strong> By Brian Ruchiadi </strong>
					<p>Memotong bawang sering kali menjadi masalah di dalam 
						dapur . Kerap kali, kita di buat menangis karenanya.
						Maka di artikel ini ..</p>
					<button class="memasak button is-primary"><a href="#">Lihat lengkap</a></button>
					<div class="misc">
						<i class="fa fa-eye" aria-hidden="true"></i> 1000
						<i class="fa fa-smile-o" aria-hidden="true"></i> 20
						<i class="fa fa-frown-o" aria-hidden="true"></i> 1
						<i class="fa fa-bar-chart" aria-hidden="true"></i> 95.2%
					</div>
				</div>
			</div><div class="main bar memasak column is-12">
				<div class="memasak left column is-3">
					<img src="{{ url('assets/images/artikel/1.jpg') }}"/>
				</div><div class="memasak right column is-9">
					<h1> Cara Memotong Bawang Dengan Benar </h1>
					<strong> By Brian Ruchiadi </strong>
					<p>Memotong bawang sering kali menjadi masalah di dalam 
						dapur . Kerap kali, kita di buat menangis karenanya.
						Maka di artikel ini ..</p>
					<button class="memasak button is-primary"><a href="#">Lihat lengkap</a></button>
					<div class="misc">
						<i class="fa fa-eye" aria-hidden="true"></i> 1000
						<i class="fa fa-smile-o" aria-hidden="true"></i> 20
						<i class="fa fa-frown-o" aria-hidden="true"></i> 1
						<i class="fa fa-bar-chart" aria-hidden="true"></i> 95.2%
					</div>
				</div>
			</div><div class="main bar memasak column is-12">
				<div class="memasak left column is-3">
					<img src="{{ url('assets/images/artikel/1.jpg') }}"/>
				</div><div class="memasak right column is-9">
					<h1> Cara Memotong Bawang Dengan Benar </h1>
					<strong> By Brian Ruchiadi </strong>
					<p>Memotong bawang sering kali menjadi masalah di dalam 
						dapur . Kerap kali, kita di buat menangis karenanya.
						Maka di artikel ini ..</p>
					<button class="memasak button is-primary"><a href="#">Lihat lengkap</a></button>
					<div class="misc">
						<i class="fa fa-eye" aria-hidden="true"></i> 1000
						<i class="fa fa-smile-o" aria-hidden="true"></i> 20
						<i class="fa fa-frown-o" aria-hidden="true"></i> 1
						<i class="fa fa-bar-chart" aria-hidden="true"></i> 95.2%
					</div>
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