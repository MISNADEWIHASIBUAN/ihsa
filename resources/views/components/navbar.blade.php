<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
  <div class="container-fluid px-3 px-lg-5 my-lg-3">
      <a class="navbar-brand" href="#beranda">
        <img src="{{ asset('img/logo-transparent.png') }}" alt="" >
      </a>
      <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link text-weight-400 text-black mx-3" href="#beranda">Beranda</a></li>
              <li class="nav-item"><a class="nav-link text-weight-400 text-black mx-3" href="#tentang">Tentang</a></li>
              <li class="nav-item"><a class="nav-link text-weight-400 text-black mx-3" href="#produk">Produk</a></li>
              <li class="nav-item"><a class="nav-link text-weight-400 text-black mx-3" href="#berita">Berita</a></li>
              @guest
              <li class="nav-item">
                <a class="nav-link text-weight-400 text-black mx-3" href="#login" onclick="openModal('login')" data-bs-toggle="modal" data-bs-target="#modalLogin">
                  <svg class="mr-2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M11.7 6C11.7 9.14802 9.14802 11.7 6 11.7C2.85198 11.7 0.3 9.14802 0.3 6C0.3 2.85198 2.85198 0.3 6 0.3C9.14802 0.3 11.7 2.85198 11.7 6ZM12 6C12 9.31371 9.31371 12 6 12C2.68629 12 0 9.31371 0 6C0 2.68629 2.68629 0 6 0C9.31371 0 12 2.68629 12 6ZM6.00011 9.99994C8.20925 9.99994 10.0001 8.20908 10.0001 5.99994C10.0001 3.79081 8.20925 1.99994 6.00011 1.99994C3.79097 1.99994 2.00011 3.79081 2.00011 5.99994C2.00011 8.20908 3.79097 9.99994 6.00011 9.99994Z"
                    fill="#0CDBC6"
                  />
                  </svg>
                  Daftar Anggota	
                </a>
              </li>
              @else
              <li class="nav-item dropdown px-3" style="position: relative">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 25px; height: 25px;">
                  <img src="{{ asset('/') }}img/riv-3.png" alt="" width="25" height="25" style="position: absolute; bottom: 20%">
                </a>
                <ul class="dropdown-menu" style="min-width: 100px !important; min-height: 60px; color: #818181;">
                  <li><a class="dropdown-item" href="#" style="position: relative;">
                    <img src="{{ asset('/') }}img/riv-3.png" alt="" width="16" height="16">
                    <span style="font-size: 8px; padding-left: 4px;">Akun Saya</span>
                  </a></li>
                  <li><a class="dropdown-item" href="{{ route('logout') }}" 
                      onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                      <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg> <span style="font-size: 8px; padding-left: 4px;">Keluar</span>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                  </a></li>
                </ul>
              </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>

@section('modal')
		<div class="modals">
			<div class="modal fade" id="modalAuth" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl">
					<div class="modal-content" style="width: 1120px; height: 670px;">
						<div class="modal-body p-0">
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection

@push('js')
	<script>
		async function openModal(route) {
			var sectionModal = $('.modal-body')
			sectionModal.html('')
			const response = await HitData(`/${route}`, null, 'GET')
			sectionModal.html(response)
			$('#modalAuth').modal('show')
		}
	</script>
@endpush