@extends('layouts.app')

@section('content')
    <main>
     <!-- Content-->
		<div class="wil-content">

			<!-- Section -->
			<section class="awe-section">
				<div class="container">

					<!-- page-title -->
					<div class="page-title pb-40">
						<h2 class="page-title__title">Paket Liburan Keluarga</h2>
						<p class="page-title__text">Lorem ipsum dolor sit amet, consectetur </p>
						<div class="page-title__divider"></div>
					</div><!-- End / page-title -->

				</div>
			</section>
			<!-- End / Section -->

      <!--=============== Package Travel ===============-->

      
      <section
        class="container package text-center"
        id="package"
        style="margin-top: -60px"
      >
        <div class="row mt-5 justify-content-center">
            @foreach($travelPackages as $travelPackage)
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
                        ${{ $travelPackage->price }}
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
    </main>
@endsection