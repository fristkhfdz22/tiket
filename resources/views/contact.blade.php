@extends('layouts.app')

@section('content')
   <div class="wil-content">

			<!-- Section -->
			<section class="awe-section">
				<div class="container">

					<!-- page-title -->
					<div class="page-title pb-40">
						<h2 class="page-title__title">Kami Mendengarkan Keluhan Anda</h2>
						<p class="page-title__text">hubungi Kami</p>
						<div class="page-title__divider"></div>
					</div><!-- End / page-title -->

				</div>
			</section>
			<!-- End / Section -->

   
						<div class="col-md-7 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 ">
							<div class="form-wrapper">

								<!-- form-item -->
								<div class="form-item form-item--half">
									<input class="form-control" type="text" name="input" placeholder="Your name" />
								</div><!-- End / form-item -->


								<!-- form-item -->
								<div class="form-item form-item--half">
									<input class="form-control" type="text" name="input" placeholder="Your emai" />
								</div><!-- End / form-item -->


								<!-- form-item -->
								<div class="form-item">
									<input class="form-control" type="text" name="input" placeholder="Subject" />
								</div><!-- End / form-item -->


								<!-- form-item -->
								<div class="form-item">
									<textarea class="form-control" placeholder="Your message"
										style="min-height:200px;"></textarea>
								</div><!-- End / form-item -->


								<!-- form-item -->
								<div class="form-item">
									<a class="md-btn md-btn--primary md-btn--lg " href="#">Send message
									</a>
								</div><!-- End / form-item -->

							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End / Section -->

@endsection