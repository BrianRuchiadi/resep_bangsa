@extends('layouts.user.app-main2')

@section('sub-title')
	Beranda
@endsection

@section('content')
	<div class="main banner columns">
		<div class="centered-briefcase">
			<div class="centered-briefcase image">
				<img src="{{ url('assets/images/food/gado_gado.jpeg') }}"/>
			</div>
			<div class="centered-briefcase title">
				Makanan Bulan Ini : Gado Gado
			</div>
		</div>
	</div>

	<div class="recipe columns">
		<div class="recipe column is-2 is-hidden-mobile">
			<h1>Resep</h1>
			<ul>
				<li>Gado Gado</li>
				<li>Soto Ayam</li>
				<li>Pecel Lele</li>
				<li>Martabak Manis</li>
				<li>Cendol</li>
				<li>Ketoprak</li>
				<li>Sate Padang</li>
				<li><button class="button is-primary">Lihat lengkap</button></li>
			</ul>
		</div>
		<div class="recipe column is-10 is-hidden-mobile">
			<div class="recipe-content column is-3">
				<img src="{{ url('assets/images/food/gado_gado.jpeg') }}" class="is-hidden-mobile">
				<span class="recipe-content title is-hidden-mobile"><h1>Gado gado</h1></span>
				<span class="recipe-content overview">
					Gado-gado adalah salah satu makanan yang berasal dari Betawi yang berupa sayur-sayuran yang direbus dan dicampur jadi satu, dengan bumbu ..  <br/>
					<strong>(klik ke link untuk lihat lengkap)</strong>
				</span>
			</div><div class="recipe-content column is-7">
				<div class="recipe-content general column">
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
				</div><div class="recipe-content step column">
					<table class="table is-narrow">
						<thead>
							<tr>
								<th colspan="2">Langkah Langkah</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td> 1 </td>
								<td> Rebus telur ayam sebanyak kurang lebih 2-3 butir. Kupas kulitnya dan potong kecil kecil </td>
							</tr>
							<tr>
								<td> 2 </td>
								<td> Tauge segar dan bagus sebanyak kurang lebih 160 gram. Cuci bersih dan buang bagian bawahnya (akar) sebelum di rebus</td>
							</tr> 
							<tr>
								<td> 3 </td>
								<td> Tumbuk kacang dan tambahkan cabe rawit secukupnya </td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="2">
									<button class="button is-primary"><a href="#">Lihat lengkap</a></button>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="tips columns">
		<div class="tips column is-2 is-hidden-mobile">
			<h1>Tips Tips</h1>
			<ul>
				<li>Membeli Bahan</li>
				<li>Memotong</li>
				<li>Teknik Khusus</li>
			</ul>
		</div>
		<div class="tips column is-10 is-hidden-mobile">
			<div class="tips-content column" style="width: 100%;">
				<div class="tips-content picture column">
					<img src="{{ url('assets/images/artikel/1.jpg') }}">
				</div><div class="tips-content brief column">
					<h1> Cara Memotong Bawang Bombay </h1>
					<strong> By Brian Ruchiadi </strong>
					<p> Memotong bawang sering kali menjadi masalah di dalam 
						dapur . Kerap kali, kita di buat menangis karenanya.
						Maka di artikel ini, saya akan membagikan cara memotong
						bawang tanpa menangis ..</p>
					<button class="button is-primary"><a href="#">Lihat lengkap</a></button>
				</div>
			</div><div class="tips-content column" style="width: 100%;">
				<div class="tips-content picture column">
					<img src="{{ url('assets/images/artikel/1.jpg') }}">
				</div><div class="tips-content brief column">
					<h1> Cara Memotong Bawang Bombay </h1>
					<strong> By Brian Ruchiadi </strong>
					<p> Memotong bawang sering kali menjadi masalah di dalam 
						dapur . Kerap kali, kita di buat menangis karenanya.
						Maka di artikel ini, saya akan membagikan cara memotong
						bawang tanpa menangis ..</p>
					<button class="button is-primary"><a href="#">Lihat lengkap</a></button>
				</div>
			</div>
		</div>
	</div>

	<div class="makanan columns">
		<div class="makanan column is-2 is-hidden-mobile">
			<h1>Makanan</h1>
			<ul>
				<li>Arsik Ikan Emas</li>
				<li>Ayam Bekakak</li>
				<li>Ayam Betutu</li>
				<li>Bika Ambon</li>
				<li>Dendeng Balado</li>
				<li>Godok Godok</li>
				<li>Gong Gong</li>
				<li><button class="button is-primary">Lihat lengkap</button></li>
			</ul>
		</div>
		<div class="makanan column is-10">
			<div class="makanan-content column is-3 is-hidden-mobile" style="width: 30%;">
				<img src="{{ url('assets/images/food/gado_gado.jpeg') }}" class="is-hidden-mobile">
				<span class="makanan-content title is-hidden-mobile"><h1>Gado gado</h1></span>
				<span class="makanan-content overview">
					Gado-gado adalah salah satu makanan yang berasal dari Betawi yang berupa sayur-sayuran yang direbus dan ...  <br/>
					<strong><button class="button is-info">Lihat lengkap</button></strong>
				</span>
			</div><div class="makanan-content column is-3 is-hidden-mobile" style="width: 30%;">
				<img src="{{ url('assets/images/food/martabak_keju.png') }}" class="is-hidden-mobile">
				<span class="makanan-content title is-hidden-mobile"><h1>Martabak Manis</h1></span>
				<span class="makanan-content overview">
					Martabak manis biasanya di kenal juga dengan sebutan kue terang bulan. Martabak manis
					..  <br/>
					<strong><button class="button is-info">Lihat lengkap</button></strong>
				</span>
			</div><div class="makanan-content column is-3 is-hidden-mobile" style="width: 30%;">
				<img src="{{ url('assets/images/food/gado_gado.jpeg') }}" class="is-hidden-mobile">
				<span class="makanan-content title is-hidden-mobile"><h1>Gado gado</h1></span>
				<span class="makanan-content overview">
					Gado-gado adalah salah satu makanan yang berasal dari Betawi yang berupa sayur-sayuran yang direbus dan ..  <br/>
					<strong><button class="button is-info">Lihat lengkap</button></strong>
				</span>
			</div>
		</div>
	</div>

	<div class="bahan columns">
		<div class="bahan column is-2 is-hidden-mobile">
			<h1>Bahan</h1>
			<ul>
				<li>Air Mineral</li>
				<li>Asam Jawa</li>
				<li>Bawang Merah</li>
				<li>Bawang Putih</li>
				<li>Brokoli</li>
				<li>Cabe Merah</li>
				<li>Cabe Rawit</li>
				<li><button class="button is-primary">Lihat lengkap</button></li>
			</ul>
		</div>
		<div class="bahan column is-10">
			<div class="bahan-content column is-3" style="width: 30%;">
				<img src="{{ url('assets/images/food/ingredients/gula_pasir.png') }}" class="is-hidden-mobile">
				<span class="bahan-content title is-hidden-mobile"><h1>Gula pasir</h1></span>
			</div><div class="bahan-content column is-3" style="width: 30%;">
				<img src="{{ url('assets/images/food/ingredients/jeruk_nipis.png') }}" class="is-hidden-mobile">
				<span class="bahan-content title is-hidden-mobile"><h1>Jeruk Nipis</h1></span>
			</div><div class="bahan-content column is-3" style="width: 30%;">
				<img src="{{ url('assets/images/food/ingredients/keju.png') }}" class="is-hidden-mobile">
				<span class="bahan-content title is-hidden-mobile"><h1>Keju</h1></span>
			</div>
		</div>
	</div>

@endsection