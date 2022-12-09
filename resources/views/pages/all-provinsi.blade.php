@extends('layouts.app', ['title' => 'All Provinsi', 'bg' => 'white'])

@section('content')
    <div style="margin-top: 150px">
      <x-quantity></x-quantity>
      
      <div id="fc-section" style="margin-top: 75px">
        <div class="container">
          <h2 class="h2 fw-bold" style="font-size: 34px;">Favorite Citizen</h2>
					<h6 class="" style="color: #A1A1A1; font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h6>
          <div class="row justify-content-start mt-5">
						@for($i = 1; $i <= 34; $i++)
              <div class="col-lg-4 col-6 mb-5">
                <img src="{{ asset('/') }}img/fc-{{ $i }}.png" alt="" class="img-fluid p-lg-2">
              </div>
            @endfor
          </div>
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