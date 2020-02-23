@extends('layouts.frontend.main')

@section('content')
	<section class="hero is-small is-primary is-bold">
		<div class="hero-body">
			<div class="container">
				<h1 class="title">
				{{-- Database Soal --}}
				Jenjang
				</h1>
				<h2 class="subtitle">
				{{-- Pada halaman ini, hanya akan dibuat Single Page Application berisi Database Soal Soal --}}
				Hanya Menampilkan Jenjang - depan.index
				</h2>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="columns is-mobile">
				<div class="owl-carousel owl-theme">
				@foreach($jenjang->all() as $jenjang)
					<div class="item">
					<div class="column">
						<div class="uk-animation-toggle" tabindex="0">
							<div class="uk-card uk-card-default uk-card-body uk-animation-fade is-link">
								<div class="card-content">
									<div class="media">
										<div class="media-left">
											<figure class="image is-128x128">
												<img src="{{asset('storage/'.$jenjang->gambar_jenjang)}}" alt="Gambar Jenjang">
											</figure>
										</div>

										<div class="media-content">
											{{-- @foreach ($kelas->all() as $kelasku) --}}
												<p class="title is-4"><a href="{{url('jenjang', $jenjang->id)}}" style="text-decoration:none; color:black">{{$jenjang->nama_jenjang}}</a></p>
											{{-- @endforeach --}}
											<p class="subtitle is-6">{!! $jenjang->deskripsi_content !!}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
			
		</section>
	
		<footer class="footer">
			<div class="content has-text-centered">
				<p>
				<strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
				<a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
				is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
				</p>
			</div>
		</footer>
@endsection