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
					<h1> Jacky Baru Saja Menyimpan Satu Artikel </h1>
					<div class="timeline news-header column is-200">
						<img src="{{asset('assets/images/artikel/1.jpg')}}"/>
					</div>
				</div>
			</div>
			<div class="timeline-content column is-fullwidth">
				<div class="timeline content column">
					<h1> Jacky Baru Saja Memasak "Gado Gado By Brian Ruchiadi" </h1>
					<div class="timeline news-header column is-200">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection