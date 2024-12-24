@extends('layouts.app')

@section('content')
<main>
      <!--=============== HOME ===============-->
      <section
        class="hero"
  id="hero"
  style="
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100vh;
    background-image: url('{{ asset('assets/img/guci.jpg') }}');
  "
      >
        <div
          class="hero-content h-100 d-flex justify-content-center align-items-center flex-column"
        >
         	<!-	<section class="awe-section">
				<div class="container">

					<!-- page-title -->
					<div class="page-title">
						<h2 class="page-title__title">
							<!-- SPASI memberi jarak, namun sesungguhnya menyatukan. Mengisi jeda
							di sela-sela rutinitas, SPASI menjadi ruang untuk melakukan apa saja, demi kebahagiaan yang
							sebenar-benarnya.<br> -->

							<!-- typing__module -->
							<div class="typing__module">
								<div class="typed-strings">
									<span>OBJEK WISATA GUCI</span>
									<span>HILING, BERSAMA KELUARGA</span>
									<!-- <span>SPACE</span> -->
								</div><span class="typed"></span>
							</div><!-- End / typing__module -->

						</h2>
						<p class="page-title__text"></p>
						<div class="page-title__divider"></div>
					</div><!-- End / page-title -->

				</div>
			</section>
        </div>
      </section>

	<!-- Section -->
		
 
  <!--=============== Why us ===============-->
      <section class="container why-us text-center">
        <h2 class="section-title" style="color: white;">Kenapa Memilih Kami</h2>
        <hr width="40" class="text-center" />
        <div class="row mt-5">
          <div class="col-lg-4 mb-3">
            <div class="card pt-4 pb-3 px-2">
              <div class="why-us-content">
                <i class="bx bx-money why-us-icon mb-4"></i>
                <h4 class="mb-3">Save Money</h4>
                <p>
                  Paket liburan yang terjangkau & berkualitas bagi semua jenis
                  wisatawan
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3">
            <div class="card pt-4 pb-3 px-2">
              <div class="why-us-content">
                <i class="bx bxs-heart why-us-icon mb-4"></i>
                <h4 class="mb-3">Stay Safe</h4>
                <p>
                  Menjamin keamanan dan kenyamanan anda melalui standard
                  operasional yang professional.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3">
            <div class="card pt-4 pb-3 px-2">
              <div class="why-us-content">
                <i class="bx bx-timer why-us-icon mb-4"></i>
                <h4 class="mb-3">Save Time</h4>
                <p>
                  Anda tidak perlu bingung tentang pemilihan hotel, restaurant
                  semua kami yang atur.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=============== Package ===============-->
      @foreach($categories as $category)
      <section class="container package text-center" id="package">
        <h2 class="section-title">{{ $category->title }}</h2>
        <hr width="40" class="text-center" />
        <div class="row mt-5 justify-content-center">

        @foreach($category->travel_packages as $travelPackage)
          <div class="col-lg-3" style="margin-bottom: 140px">
            <div class="card package-card">
              <a href="{{ route('detail', $travelPackage) }}" class="package-link">
                <div class="package-wrapper-img overflow-hidden">
                  <img
                  src="{{ $travelPackage->galleries->first() ? Storage::url($travelPackage->galleries->first()->path) : asset('images/default-image.jpg') }}"
                  class="img-fluid"
              />
                </div>
                <div class="package-price d-flex justify-content-center">
                  <span class="btn btn-light position-absolute package-btn">
                    IDR.{{ number_format($travelPackage->price) }}
                  </span>
                </div>
                <h5 class="btn position-absolute w-100">
                  {{ $travelPackage->name }}
                </h5>
              </a>
            </div>
          </div>
        @endforeach

        </div>
      </section>
      @endforeach

     
    </main>
@endsection
