@extends('layouts.app', ['title' => 'All Provinsi', 'bg' => 'white'])

@section('content')
    <div style="margin-top: 150px">
      <x-quantity></x-quantity>
      
      <div id="fc-section" style="margin-top: 75px;">
        <div class="container" style="position: relative;">
          <h2 class="h2 fw-bold" style="font-size: 34px;">Favorite Citizen</h2>
					<h6 class="" style="color: #A1A1A1; font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h6>
						<style>
							.img-gallery {
								padding-bottom: 45px;
							}
							.gallery:after {
								content  : "";
								position : absolute;
								z-index  : 1;
								bottom   : 0;
								left     : 0;
								pointer-events   : none;
								background-image : linear-gradient(to bottom, 
																	rgba(255,255,255, 0), 
																	rgba(255,255,255, 1) 90%);
								width    : 100%;
								height   : 8em;
							}
						</style>
					<div id="gallery" class="gallery p-4" style="margin-top: 50px; height: 1600px; overflow: hidden;">
						<div class="row">
							<div class="col-6">
								<div class="row">
									<div class="col">
										<img src="{{ asset('/') }}img/prov-1.png" alt="" class="img-gallery">
									</div>
									<div class="col">
										<img src="{{ asset('/') }}img/prov-3.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-5.png" alt="" class="img-gallery">
									</div>
									<div class="col">
										<img src="{{ asset('/') }}img/prov-2.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-4.png" alt="" class="img-gallery">
									</div>
								</div>
								<div class="row">
									<div class="col">
										<img src="{{ asset('/') }}img/prov-1.png" alt="" class="img-gallery">
									</div>
									<div class="col">
										<img src="{{ asset('/') }}img/prov-3.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-5.png" alt="" class="img-gallery">
									</div>
									<div class="col">
										<img src="{{ asset('/') }}img/prov-2.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-4.png" alt="" class="img-gallery">
									</div>
								</div>
								<div class="row">
									<div class="col">
										<img src="{{ asset('/') }}img/prov-1.png" alt="" class="img-gallery">
									</div>
									<div class="col">
										<img src="{{ asset('/') }}img/prov-3.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-5.png" alt="" class="img-gallery">
									</div>
									<div class="col">
										<img src="{{ asset('/') }}img/prov-2.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-4.png" alt="" class="img-gallery">
									</div>
								</div>
								<div class="row">
									<div class="col">
										<img src="{{ asset('/') }}img/prov-3.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-5.png" alt="" class="img-gallery">
									</div>
									<div class="col">
										<img src="{{ asset('/') }}img/prov-2.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-4.png" alt="" class="img-gallery">
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="row">
									<div class="col">
										<img src="{{ asset('/') }}img/prov-2.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-4.png" alt="" class="img-gallery">
									</div>
									<div class="col">
										<img src="{{ asset('/') }}img/prov-3.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-5.png" alt="" class="img-gallery">
									</div>
								</div>
								<div class="row">
									<div class="col">
										<img src="{{ asset('/') }}img/prov-1.png" alt="" class="img-gallery">
									</div>
									<div class="col">
										<img src="{{ asset('/') }}img/prov-3.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-5.png" alt="" class="img-gallery">
									</div>
									<div class="col">
										<img src="{{ asset('/') }}img/prov-2.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-4.png" alt="" class="img-gallery">
									</div>
								</div>
								<div class="row">
									<div class="col">
										<img src="{{ asset('/') }}img/prov-3.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-5.png" alt="" class="img-gallery">
									</div>
									<div class="col">
										<img src="{{ asset('/') }}img/prov-2.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-4.png" alt="" class="img-gallery">
									</div>
								</div>
								<div class="row">
									<div class="col">
										<img src="{{ asset('/') }}img/prov-2.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-4.png" alt="" class="img-gallery">
									</div>
									<div class="col">
										<img src="{{ asset('/') }}img/prov-3.png" alt="" class="img-gallery">
										<img src="{{ asset('/') }}img/prov-5.png" alt="" class="img-gallery">
									</div>
								</div>
								<div class="row">
									<div class="col">
										<img src="{{ asset('/') }}img/prov-1.png" alt="" class="img-gallery">
									</div>
								</div>
							</div>
						</div>
					</div>
        </div>
				<div id="seemore" onclick="seeMore()" class="text-center fw-bold" style="padding-top: 100px; margin-bottom: 125px; font-weight: 600; font-size: 24px; line-height: 132%; color: black;">
					<span class="text-center">See More</span> <br>
					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-down-circle mt-2" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
					</svg>
				</div>
      </div>

      <div class="recommend-section mt-5 mb-4">
				<div class="container my-5">
					<h2 class="h2 fw-bold " style="font-size: 34px;">Rekomendasi Home Stay Untuk Anda!</h2>
					<h6 class="" style="color: #A1A1A1; font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h6>
					<div class="row justify-content-center mt-5">
						@for ($i = 0; $i < 8; $i++)
								<x-recommend></x-recommend>
						@endfor
					</div>
				</div>
			</div>
    </div>
@endsection

@push('js')
		<script>
			function seeMore() {
				$('#gallery').css('height', 'auto');
				$('#seemore').toggleClass('d-none');
			}
		</script>
@endpush