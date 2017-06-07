@extends('layouts.user.app-main2')

@section('sub-title')
	Bahan
@endsection

@section('content')
<div class="split columns">
	<div class="left column is-2 is-hidden-mobile">
		<ul>
			<a href="#"><li class="is-active"> Beranda Saya</li></a>
			<li> Dashboard </li>
			<li> Lihat Koleksi Resep</li>
			<li> Lihat koleksi makanan</li>
			<li> Lihat Sejarah poin</li>
			<li> Setting </li>
		</ul>
	</div>
	<div class="right column is-10 is-hidden-mobile">
		<div class="profile column is-fullwidth">
			<div class="profile-picture column is-200">
				<img src="{{ asset('assets/images/profile/jacky.jpeg') }}"/>
			</div><div class="profile-main column">
				<table class="table is-narrow">
					<tr>
						<td> Following </td>
						<td> 1000 </td>
					</tr>
					<tr>
						<td> Followers </td>
						<td> 200 </td>
					</tr>
				</table>
				<table class="table is-narrow">
					<tr>
						<td> Jumlah Memasak </td>
						<td> 72 </td>
					</tr>
					<tr>
						<td> Jumlah Resep </td>
						<td> 1 </td>
					</tr>
				</table>

				<div class="profile-point">
					<i class="fa fa-circle" aria-hidden="true"></i>
					3000
				</div>
			</div>
		</div>
		<div class="timeline column is-fullwidth">
			<div class="timeline-content column is-fullwidth">
				<div class="timeline content column">
					<h1> Jacky Menyimpan Satu Artikel </h1>
					<button class="posted button is-info"> 12th Februari 2017</button>
					<button class="posted button is-earned">
						<i class="fa fa-circle" aria-hidden="true"></i>200
					</button>

					<div class="timeline news-header column is-150">
						<img src="{{asset('assets/images/artikel/1.jpg')}}"/>
					</div><div class="timeline news-summary">
						<h1>Cara memotong bawang dengan benar</h1>
						<p>Memotong bawang sering kali menjadi masalah di dalam 
						dapur . Kerap kali, kita di buat menangis karenanya.
						Maka di artikel ini, saya akan membagikan cara memotong
						bawang tanpa menangis .</p>
					</div>
					<i class="scroll fa fa-arrows-v" aria-hidden="true"></i>
					<button class="more button is-info">
						<i class="fa fa-newspaper-o" aria-hidden="true"></i>
						Lihat Lengkap
					</button>
				</div>
			</div>
			<div class="timeline-content column is-fullwidth">
				<div class="timeline content column">
					<h1> Jacky Baru Saja Memasak </h1>
					<button class="posted button is-info"> 10th Februari 2017</button>
					<button class="posted button is-earned">
						<i class="fa fa-circle" aria-hidden="true"></i>500
					</button>
					<div class="timeline news-header column is-150">
						<img src="{{asset('assets/images/food/gado_gado.jpeg')}}"/>
					</div><div class="timeline news-summary">
						<h1>Gado Gado By Johnny</h1>
						<p>Gado gado adalah makanan populer yang diminati oleh berbagai kalangan. Gado gado dapat ditemui di banyak tempat dan biasanya terjangkau dengan harga yang murah.
						Cara memasak gado gado juga tidak sulit.</p>
					</div>
					<i class="scroll fa fa-arrows-v" aria-hidden="true"></i>
					<button class="more button is-info">
						<i class="fa fa-newspaper-o" aria-hidden="true"></i>
						Lihat Lengkap
					</button>
					<button class="time button is-info">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
						15 menit
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection