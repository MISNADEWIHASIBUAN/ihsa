@extends('layouts.app', ['title' => 'Welcome'])

@section('content')
		<header class="masthead">
			<div class="container px-4 px-lg-2 d-flex h-100 align-items-center justify-content-lg-start justify-content-center">
					<div class="d-flex px-lg-2 justify-content-start w-100">
						<div class="text-lg-start text-center w-100">
							<img src="{{ asset('img/logo-transparent-2.png') }}" alt="">
							<h2 class="h2 fw-bold text-white p-2">Daftarkan diri Anda <br> Sebagai Anggota IHSA <br> disini!</h2>
							<div class="button-daftar p-3">
								<a class="btn btn-primary fw-bold" href="#about">Daftar di sini !</a>
							</div>
							<div id="line">
								<div class="line-1"></div>
								<div class="line-2"></div>
							</div>
						</div>
					</div>
			</div>
		</header>

		<section id="tentang" class="tentang-section">
			<div class="container text-black p-5">
				<h2 class="fw-bold h2 text-center">Tentang</h2>
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-5 z-0 px-2" style="position: relative">
						<img src="{{ asset('/') }}img/bg-2.png" alt="" class="img-fluid" style="width: 455px; height: 250px" />
						<div class="img-logo">
							<img
								src="{{ asset('/') }}img/logo-transparent-lg.png"
								alt=""
							/>
						</div>
						<p class="text-uppercase text-img-logo z-10">Indonesian home stay assosiation</p>
					</div>
					<div class="col-lg-7 z-10">
						<h3 class="fs-1 fw-bold">IHSA</h3>
						<h4 class="fw-bold">INDONESIAN HOME STAY ASSOSIATION</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate amet,
							vitae eget enim ligula aliquam interdum ut. Leo metus, sit tellus
							laoreet lacinia eleifend egestas. Volutpat nullam a blandit dictum sed
							rhoncus non. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Vulputate amet, vitae eget enim ligula aliquam interdum ut. Leo metus,
							sit tellus laoreet lacinia eleifend egestas.
						</p>
					</div>
				</div>
			</div>
			
			<x-quantity></x-quantity>
			
			<div class="organization-section container">
				<img
					src="{{ asset('/') }}img/bg-3.png"
					{{-- class="mx-auto d-block" --}}
					alt="" class="img-fluid img-flex-organization"
				/>
				<div class="container">
					<h2 class="text-center fw-bold my-5">THE ORGANIZATION</h2>
					<div class="row justify-content-center">
						<div class="col-lg-6 mx-auto" style="width:28rem;">
							<div
								class="max-w-full flex flex-col align-items-center text-center"
							>
								<svg
									width="90"
									height="66"
									viewBox="0 0 90 66"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
								>
									<g clip-path="url(#clip0_216_1258)">
										<path
											d="M43.9731 19.6241C38.7942 19.6241 34.625 23.8358 34.625 28.9991C34.625 34.1641 38.7942 38.3741 43.9731 38.3741C49.0642 38.3741 53.1881 34.2938 53.3262 29.2433C53.3587 29.166 53.3753 29.083 53.375 28.9991C53.375 27.7071 53.1119 26.4736 52.6353 25.3517C52.6053 25.2732 52.5598 25.2015 52.5015 25.141C52.4433 25.0804 52.3734 25.0323 52.296 24.9994C52.2187 24.9664 52.1356 24.9495 52.0515 24.9495C51.9675 24.9494 51.8843 24.9664 51.807 24.9992C51.7296 25.032 51.6597 25.0802 51.6013 25.1407C51.543 25.2011 51.4975 25.2727 51.4674 25.3512C51.4374 25.4297 51.4235 25.5135 51.4266 25.5975C51.4297 25.6815 51.4497 25.7639 51.4854 25.84C51.898 26.8112 52.125 27.877 52.125 28.9991C52.125 33.4896 48.4758 37.1241 43.9731 37.1241C39.469 37.1241 35.875 33.4941 35.875 28.9991C35.875 24.506 39.469 20.8741 43.9731 20.8741C45.0988 20.8741 46.17 21.1024 47.1445 21.5138C48.1191 21.9252 48.9966 22.5211 49.7349 23.257C49.7931 23.315 49.8621 23.3611 49.9381 23.3925C50.0141 23.4238 50.0955 23.4399 50.1776 23.4398C50.2598 23.4396 50.3412 23.4232 50.4171 23.3917C50.493 23.3601 50.5619 23.3141 50.6199 23.2559C50.678 23.1977 50.724 23.1286 50.7553 23.0526C50.7867 22.9767 50.8027 22.8953 50.8026 22.8131C50.8025 22.7309 50.7862 22.6494 50.7546 22.5735C50.7231 22.4976 50.6769 22.4288 50.6187 22.3707C49.768 21.5229 48.7551 20.8361 47.6304 20.3615C46.5056 19.8866 45.2675 19.6241 43.9731 19.6241Z"
											fill="#2B4255"
										/>
										<path
											d="M44 19.6241C32.9588 19.6241 24.1807 28.5597 24.1807 28.5597C24.0643 28.6768 23.9989 28.8353 23.9989 29.0004C23.9989 29.1655 24.0643 29.3239 24.1807 29.441C24.1807 29.441 32.9588 38.3741 44 38.3741C55.0412 38.3741 63.8193 29.441 63.8193 29.441C63.9357 29.3239 64.001 29.1655 64.001 29.0004C64.001 28.8353 63.9357 28.6768 63.8193 28.5597C63.8193 28.5597 55.0412 19.6241 44 19.6241ZM44 20.8741C53.8276 20.8741 61.5386 28.2097 62.3569 29.0016C61.537 29.7948 53.8265 37.1241 44 37.1241C34.1734 37.1241 26.463 29.7948 25.6431 29.0016C26.4614 28.2097 34.1724 20.8741 44 20.8741Z"
											fill="#2B4255"
										/>
										<path
											fill-rule="evenodd"
											clip-rule="evenodd"
											d="M41.8711 25.2491L41.7563 25.7277L40.4771 31.0011H42.6792L41.8442 34.8707L48.1919 28.2496H45.438L46.5293 25.2491H41.8711H41.8711ZM42.8574 26.4991H44.7446L43.6533 29.4996H45.2622L44 30.818L44.2295 29.7511H42.0689L42.8574 26.4991Z"
											fill="#0CDBC6"
										/>
									</g>
									<path
										d="M0.5 0.5H45C69.5767 0.5 89.5 20.4233 89.5 45V64.9545H45C20.4233 64.9545 0.5 45.0312 0.5 20.4545V0.5Z"
										stroke="#0CDBC6"
									/>
									<defs>
										<clipPath id="clip0_216_1258">
											<rect
												width="40"
												height="40"
												fill="white"
												transform="translate(24 9)"
											/>
										</clipPath>
									</defs>
								</svg>
								<h3 class="text-lg mt-5 mb-5">Vision</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempor
									risus, felis donec etiam nullam urna risus ac. Varius nibh malesuada
									sed eros. Condimentum nunc, lacus, adipiscing magna. In dui auctor
									nunc viverra volutpat.
								</p>
							</div>
						</div>
						<div class="col-lg-6 mx-auto" style="width:28rem;">
							<div
								class="max-w-full flex flex-col align-items-center text-center"
							>
								<svg
									width="90"
									height="66"
									viewBox="0 0 90 66"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
								>
									<g clip-path="url(#clip0_216_1268)">
										<path
											d="M44.0536 22.8928H34.2322C34.1138 22.8928 34.0002 22.9399 33.9165 23.0236C33.8328 23.1073 33.7858 23.2209 33.7858 23.3393V36.7321C33.7858 36.8505 33.8328 36.9641 33.9165 37.0478C34.0002 37.1315 34.1138 37.1785 34.2322 37.1785H44.0554C44.2795 37.1785 45.3929 37.2446 45.3929 38.5178C45.3929 38.6362 45.4399 38.7498 45.5237 38.8335C45.6074 38.9172 45.7209 38.9643 45.8393 38.9643C45.9577 38.9643 46.0713 38.9172 46.155 38.8335C46.2387 38.7498 46.2858 38.6362 46.2858 38.5178V25.1107C46.2617 24.3437 45.7643 22.8928 44.0536 22.8928ZM45.3929 36.6928C44.9944 36.4323 44.5297 36.291 44.0536 36.2857H34.6786V23.7857H44.0536C45.3001 23.7857 45.3876 25.0026 45.3929 25.125V36.6928Z"
											fill="#0CDBC6"
										/>
										<path
											d="M55.508 40.75H43.1491C43.1545 40.7509 42.5214 40.758 42.1313 40.3759C41.9071 40.1554 41.7929 39.8313 41.7929 39.4107C41.7929 39.2923 41.7458 39.1788 41.6621 39.095C41.5784 39.0113 41.4648 38.9643 41.3464 38.9643C41.228 38.9643 41.1145 39.0113 41.0308 39.095C40.947 39.1788 40.9 39.2923 40.9 39.4107C40.9 40.0839 41.1063 40.625 41.5143 41.0205C42.1277 41.6143 42.9857 41.6429 43.1384 41.6429H55.508C55.8554 41.6429 56.15 41.5027 56.3393 41.2473C56.5902 40.9089 56.5848 40.4768 56.5045 40.2098C56.0018 38.5554 53.3429 34.9571 52.5946 33.9634C53.3152 32.8554 56.0009 28.6598 56.5045 27.0054C56.5857 26.7384 56.5911 26.3071 56.3393 25.9679C56.15 25.7116 55.8554 25.5714 55.508 25.5714H47.6625C47.5441 25.5714 47.4306 25.6185 47.3468 25.7022C47.2631 25.7859 47.2161 25.8995 47.2161 26.0179C47.2161 26.1363 47.2631 26.2498 47.3468 26.3335C47.4306 26.4173 47.5441 26.4643 47.6625 26.4643H55.508C55.5964 26.4643 55.6143 26.4893 55.6214 26.4991C55.6634 26.5545 55.6705 26.675 55.6491 26.7446C55.117 28.4955 51.7098 33.6839 51.675 33.7366C51.6241 33.8141 51.5985 33.9054 51.6019 33.9981C51.6052 34.0907 51.6373 34.18 51.6938 34.2536C51.7277 34.2982 55.1214 38.7339 55.6491 40.4688C55.6697 40.5393 55.6634 40.6589 55.6214 40.7152C55.6143 40.725 55.5964 40.75 55.508 40.75V40.75ZM32.8929 50.125V22.4464C32.8929 22.328 32.8458 22.2145 32.7621 22.1308C32.6784 22.047 32.5648 22 32.4464 22C32.328 22 32.2145 22.047 32.1308 22.1308C32.047 22.2145 32 22.328 32 22.4464V50.125C32 50.2434 32.047 50.357 32.1308 50.4407C32.2145 50.5244 32.328 50.5714 32.4464 50.5714C32.5648 50.5714 32.6784 50.5244 32.7621 50.4407C32.8458 50.357 32.8929 50.2434 32.8929 50.125Z"
											fill="#2B4255"
										/>
									</g>
									<path
										d="M45 0.5H89.5V20.4546C89.5 45.0312 69.5767 64.9545 45 64.9545H0.5V45C0.5 20.4233 20.4233 0.5 45 0.5Z"
										stroke="#0CDBC6"
									/>
									<defs>
										<clipPath id="clip0_216_1268">
											<rect
												width="25"
												height="28.5714"
												fill="white"
												transform="translate(32 22)"
											/>
										</clipPath>
									</defs>
								</svg>

								<h3 class="text-lg mt-5 mb-5">Mision</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempor
									risus, felis donec etiam nullam urna risus ac. Varius nibh malesuada
									sed eros. Condimentum nunc, lacus, adipiscing magna. In dui auctor
									nunc viverra volutpat.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="profile-section">
				<div class="p-4 flex gap-8" style="background-color: #002931;">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4" style="position: relative;">
							<img src="{{ asset('/') }}img/bg-22.jpg" alt="" class="img-fluid bg-profile">
							<img src="{{ asset('/') }}img/profil.png" alt="" class="img-fluid img-profile" />
						</div>
						<div class="col-lg-8">
							<div class="">
								<span class="fw-bold text-white"
									>Dewan Pengurus Pusat (DPP) IHSA</span
								>
								<span class="d-block fw-bold my-3" style="color: rgba(196, 196, 196, 0.53);">Ketua Umum IHSA</span>
								<h3 class="text-white">H.ALVY PONGOH, SE, MM</h3>
								<div class="d-block text-white flex">
									<p class="mt-5 p-overflow text-start">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempor risus, felis donec etiam nullam urna risus ac. Varius nibh malesuada sed eros. Condimentum nunc, lacus, adipiscing magna. In dui auctor nunc viverra volutpat. consectetur adipiscing elit. Tempor risus, felis donec etiam nullam urna risus ac. Varius nibh malesuada sed eros. Condimentum nunc, lacus, adipiscing magna. In dui auctor nunc viverra volutpat. consectetur adipiscing elit. Tempor risus, felis donec etiam nullam urna risus ac. Varius nibh malesuada sed eros. Condimentum nunc, lacus, adipiscing magna. In dui auctor nunc viverra volutpat.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempor risus, felis donec etiam nullam urna risus ac. Varius nibh malesuada sed eros. Condimentum nunc, lacus, adipiscing magna. In dui auctor nunc viverra volutpat. consectetur adipiscing elit. Tempor risus, felis donec etiam nullam urna risus ac. Varius nibh malesuada sed eros. Condimentum nunc, lacus, adipiscing magna. In dui auctor nunc viverra volutpat. consectetur adipiscing elit. Tempor risus, felis donec etiam nullam urna risus ac. Varius nibh malesuada sed eros. Condimentum nunc, lacus, adipiscing magna. In dui auctor nunc viverra volutpat.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="produk">
			<div class="event-section mb-5" style="position: relative;">
				<div class="container">
					<div class="card border-0 mb-3" style="width: auto;">
						<div class="row g-0" style="position: relative">
							<hr class="card-line card-line1">
							<div class="col-5" style="z-index: 2; position: relative;">
								<img src="{{ asset('/') }}img/event-1.png" class="rounded-start img-event" alt="...">
								<div class="img-title py-lg-2 px-lg-4" style="position: absolute;">
									<svg
										width="18"
										height="20"
										viewBox="0 0 18 20"
										fill="none"
										xmlns="http://www.w3.org/2000/svg"
									>
										<path
											fill-rule="evenodd"
											clip-rule="evenodd"
											d="M2 7.5C2 3.63401 5.13401 0.5 9 0.5C12.866 0.5 16 3.63401 16 7.5C16 8.8722 15.6052 10.1522 14.9229 11.2325L17.6495 15.9551C17.7967 16.2101 17.7812 16.5276 17.6097 16.767C17.4382 17.0063 17.1425 17.1231 16.8537 17.0657L14.2376 16.5455L13.3801 19.0713C13.2854 19.35 13.0364 19.5477 12.7434 19.5765C12.4504 19.6054 12.1676 19.4601 12.0204 19.2051L9.3002 14.4937C9.2007 14.4979 9.1006 14.5 9 14.5C8.8994 14.5 8.7993 14.4979 8.6998 14.4937L5.97965 19.2051C5.83258 19.4599 5.5502 19.6051 5.25745 19.5766C4.96471 19.5481 4.71564 19.3511 4.62047 19.0728L3.75854 16.5522L1.14467 17.066C0.856059 17.1228 0.560929 17.0056 0.389879 16.7663C0.218819 16.527 0.20342 16.2099 0.35048 15.9551L3.07708 11.2325C2.39483 10.1522 2 8.8722 2 7.5ZM4.08592 12.4852C4.91817 13.3056 5.95488 13.9192 7.1127 14.2426L5.50579 17.0259L4.96599 15.4473C4.84463 15.0924 4.47972 14.8817 4.11167 14.9541L2.4747 15.2759L4.08592 12.4852ZM10.8873 14.2426L12.4918 17.0217L13.0287 15.4406C13.1497 15.0842 13.516 14.8727 13.8851 14.9461L15.5229 15.2717L13.9141 12.4852C13.0818 13.3056 12.0451 13.9192 10.8873 14.2426ZM9 4.25C7.2051 4.25 5.75 5.70507 5.75 7.5C5.75 9.2949 7.2051 10.75 9 10.75C10.7949 10.75 12.25 9.2949 12.25 7.5C12.25 5.70507 10.7949 4.25 9 4.25Z"
											fill="#0CDBC6"
										/>
									</svg>
									<span class="h2 event-capt">Event</span>
								</div>
							</div>
							<div class="col-7" style="position: relative;">
								<div class="card-body mx-lg-2">
									<h2 class="card-title h2 mt-lg-5">Name Event</h2>
									<h6 class="h5">Event Konten</h6>
									<p class="card-text p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam diam pharetra viverra fermentum risus semper. Odio id massa lorem euismod dui praesent risus sem metus. Eget pellentesque neque vel in semper felis et, pharetra. Etiam blandit tincidunt euismod massa nunc.</p>
								</div>
								<img src="{{ asset('/') }}img/frame-eclipse.png" alt="" class="img-eclipse">
							</div>
							<hr class="card-line card-line2">
						</div>
					</div>
				</div>
			</div>
			<div class="place-section mt-5 mb-4">
				<div class="container my-5">
					<h2 class="h2 fw-bold text-center capt">Favorite Citizen</h2>
					<h6 class="text-center title-capt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h6>
					<div class="row justify-content-center mt-5">
						<div class="col-lg-4" style="position: relative;">
							<img src="{{ asset('/') }}img/fav-1.png" alt="" class="img-fluid p-2">
							<p class="img-fav-capt" style="background-color: #002931; color: white;">Bali</p>
						</div>
						<div class="col-lg-4" style="position: relative;">
							<img src="{{ asset('/') }}img/fav-2.png" alt="" class="img-fluid p-2">
							<p class="img-fav-capt" style="background-color: white; color: rgba(0, 0, 0, 0.58);">Yogyakarta</p>
						</div>
						<div class="col-lg-4" style="position: relative;">
							<img src="{{ asset('/') }}img/fav-3.png" alt="" class="img-fluid p-2">
							<p class="img-fav-capt"  style="background-color: white;color: rgba(0, 0, 0, 0.58);">Jawa Barat</p>
						</div>
					</div>
					<div class="text-right px-3 text-see-all">
						<a href="{{ route('all-provinsi') }}" class="text-right"> See All</a>
					</div>
				</div>
				<div class="container my-5"></div>
			</div>
			<div class="recommend-section mt-5 mb-4">
				<div class="container my-5">
					<h2 class="h2 fw-bold text-center capt2">Rekomendasi Home Stay Untuk Anda!</h2>
					<h6 class="text-center title-capt">Home Stay with standardized hygiene protocol </h6>
					<div class="row justify-content-center mt-5">
						@for ($i = 0; $i < 8; $i++)
								<x-recommend></x-recommend>
						@endfor
					</div>
				</div>
			</div>
		</section>

		<section id="berita" class="mt-4">
			<h2 class="h2 fw-bold text-center mb-5">Berita Seputar IHSA</h2>
			<div class="container">
				@for($i = 0; $i < 3; $i++)
					<div class="card text-start mx-auto my-5">
						<div class="card-body">
							<div class="row justify-content-between align-items-center">
								<div class="col-lg-5">
									<img src="{{ asset('/') }}img/news-1.png" alt="" class="m-2 img-fluid img-berita">
								</div>
								<div class="col-lg-7" style="width: 530px">
									<h3 class="card-title fw-bold">653 Calon anggota telah resmi dilantik menjadi anggota IHSA</h3>
									<p class="card-text">Kuta, Bali, 21 Maret 2022 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempor risus, felis donec etiam nullam urna risus ac. Varius nibh malesuada sed eros. Condimentum nunc, lacus, adipiscing magna. In dui auctor nunc viverra volutpat. consectetur adipiscing elit</p>
									<div class="row justify-content-between align-items-baseline mt-5">
										<div class="col-lg-2 col-4 p-0">
											<img src="{{ asset('/') }}img/logo-transparent.png" alt="" style="width: 100px; height: 27px; margin-top: 10px;">
										</div>
										<div class="col-lg-3 col-5 p-0 p-lg-2">
											<div class="text" style="font-size: 9px;">
												<b>IHSA</b>
												<p>Senin, 21 Maret 2022</p>
											</div>	
										</div>
										<div class="col-lg-6 col"></div>
										<div class="col-lg-1 col-2 text-end">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="11" fill="currentColor" class="bi bi-eye" viewBox="0 0 11 16">
												<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
												<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
											</svg> 
											<p style="font-size: 9px;"> 67</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endfor
			</div>
		</section>

		<div class="supportedby-section my-5">
			<img src="{{ asset('/') }}img/bg-4.jpg" alt="">
		</div>

		<div class="gallery-section my-5">
			<h2 class="h2 fw-bold text-center mb-5">Gallery</h2>
			<div class="container mb-5">
				<div class="row justify-content-around mx-auto">
					<div class="col-img-1 col-6">
						<img src="{{ asset('/') }}img/g-1.png" alt="" class="img-fluid my-lg-2 mx-lg-1">
					</div>
					<div class="col-img-2 col-6">
						<img src="{{ asset('/') }}img/g-2.png" alt="" class="img-fluid my-lg-2 mx-lg-1">
						<img src="{{ asset('/') }}img/g-3.png" alt="" class="img-fluid my-lg-2 mx-lg-1">
					</div>
					<div class="col-img-3 col-3">
						<img src="{{ asset('/') }}img/g-4.png" alt="" class="img-fluid my-lg-2 mx-lg-1" >
					</div>
					<div class="col-img-4 col-3">
						<img src="{{ asset('/') }}img/g-5.png" alt="" class="img-fluid my-lg-2 mx-lg-1">
						<img src="{{ asset('/') }}img/g-6.png" alt="" class="img-fluid my-lg-2 mx-lg-1">
					</div>
					<div class="col-img-5 col-6">
						<img src="{{ asset('/') }}img/g-7.png" alt="" class="img-fluid my-lg-2 mx-lg-1">
					</div>
					{{-- <tr>
						<td rowspan="2"><img src="{{ asset('/') }}img/g-1.png" alt="" style="width: 278px;" class="m-1"></td>
						<td><img src="{{ asset('/') }}img/g-2.png" alt="" style="width: 278px;" class="m-1"></td>
						<td rowspan="2"><img src="{{ asset('/') }}img/g-4.png" alt="" style="width: 120px;" class="m-1"></td>
						<td><img src="{{ asset('/') }}img/g-5.png" alt="" style="width: 120px;" class="m-1"></td>
						<td rowspan="2"><img src="{{ asset('/') }}img/g-7.png" alt="" style="width: 282px;" class="m-1"></td>
					</tr>
					<tr>
						<td><img src="{{ asset('/') }}img/g-3.png" alt="" style="width: 278px;" class="m-1"></td>
						<td><img src="{{ asset('/') }}img/g-6.png" alt="" style="width: 120px;" class="m-1"></td>
					</tr> --}}
				</div>
			</div>
		</div>

		<div class="contact-section my-5" style="position: relative">
			<h2 class="h2 fw-bold text-center mb-5">Contacts</h2>
			<div class="container">
				<div class="row justify-content-center align-items-center px-lg-5 mx-lg-5 row-contact1">
					<div class="col-lg-3">
						<div class="input-name">
							<p style="font-size: 16px; line-height: 24px;">Name</p>
							<input type="text" name="name" id="name" placeholder="Write Your Name">
						</div>

						<div class="input-phone">
							<p style="font-size: 16px; line-height: 24px;">Phone Number</p>
							<input type="text" name="phone" id="phone" placeholder="Write Your Phone Number">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="input-first-name">
							<p style="font-size: 16px; line-height: 24px;">First Name</p>
							<input type="text" name="first_name" id="first_name" placeholder="Write Your First Name">
						</div>
						
						<div class="input-email">
							<p style="font-size: 16px; line-height: 24px;">Email</p>
							<input type="email" name="email" id="email" placeholder="Write Your Email">
						</div>
					</div>
					<div class="col-lg-6" style="position: relative;">
						<div class="input-messages">
							<p style="font-size: 16px; line-height: 24px;">Messages</p>
							<input type="text" name="messages" id="messages" placeholder="Write Your Messages">
						</div>
						<hr id="border">
						
						<button class="btn text-white fw-bold">Send a Messages</button>
					</div>
				</div>
			</div>
		</div>
@endsection
