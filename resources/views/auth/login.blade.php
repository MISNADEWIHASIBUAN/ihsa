<div class="login-container">
  <div class="login-overlay-login">
    <div class="login-buat-akun">
      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="login-b-a-c-k-g-r-o-u-n-d">
          <img
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/76da3e88-e8e8-4eca-b419-cf9eeac2278c/ea9f8a59-7397-483f-ad03-eb852b7fdfbe?org_if_sml=12499"
            alt="Rectangle382061"
            class="login-rectangle38"
          />
          <img
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/76da3e88-e8e8-4eca-b419-cf9eeac2278c/8d656847-3051-4937-87fa-91a8a6e5bcdf?org_if_sml=12922"
            alt="Rectangle392061"
            class="login-rectangle39"
          />
          {{-- <img
            src="/playground_assets/rectangle402061-abyr.svg"
            alt="Rectangle402061"
            class="login-rectangle40"
          /> --}}
          <img
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/76da3e88-e8e8-4eca-b419-cf9eeac2278c/e46bd670-cfb6-4ed5-9304-524ee6447d78?org_if_sml=14425"
            alt="Rectangle382061"
            class="login-rectangle381"
          />
          <img
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/76da3e88-e8e8-4eca-b419-cf9eeac2278c/ddf4b76e-f668-4be1-b3f5-4ebaf03e6f31?org_if_sml=13932"
            alt="Rectangle392061"
            class="login-rectangle391"
          />
          {{-- <img
            src="/playground_assets/rectangle402061-9yd.svg"
            alt="Rectangle402061"
            class="login-rectangle401"
          /> --}}
        </div>
        <span class="login-text H4Headline"><span>Masuk</span></span>
        <div class="login-name">
            {{-- <label for="" class="form-label">Name</label> --}}
          <input type="text"
            class="form-control auth-input" name="nama" id="nama-input" value="{{ old('nama') }}" placeholder="Nama">
          {{-- <img
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/76da3e88-e8e8-4eca-b419-cf9eeac2278c/9aa53e8a-228c-4552-8eaf-7b733e6cae49?org_if_sml=1368"
            alt="Rectangle372061"
            class="login-rectangle37"
          />
          <span class="login-text02 Body2"><span>Nama</span></span> --}}
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E0E0E0" class="bi bi-person login-user" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
          </svg>
        </div>
        <div class="login-katasandi">
          <input type="password"
            class="form-control auth-input" name="password" id="password-input" value="{{ old('password ') }}" placeholder="Password">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E0E0E0" class="bi bi-key login-key" viewBox="0 0 16 16">
            <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
            <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
          </svg>
        </div>
        <div class="login-pilihan-buat-akun">
          <div class="login-facebook">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#1672EC" class="bi bi-facebook" viewBox="0 0 16 16" style="border-radius: 15px; background-color: white;">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
          </div>
          <div class="login-google">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-google" viewBox="0 0 16 16" style="background: #DA100B; padding: 5px; border-radius: 15px;">
              <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
            </svg>
          </div>
          <div class="login-lingked-in">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#5096F1" class="bi bi-linkedin" viewBox="0 0 16 16" style="border-radius: 15px; background-color: white;">
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg>
          </div>
        </div>
        <button type="submit" class="btn login-button">
          <span class="btn-text Body1"><span>Masuk</span></span>
        </button>
        <span class="login-text08 Caption">
          <span class="login-text09">Belum Punya Akun ?</span>
        </span>
        <span class="login-text10 Caption"><span style="cursor: pointer" onclick="openModal('masuk')" data-bs-toggle="modal" data-bs-target="#modalMasuk">Daftar</span></span>
      </form>
    </div>
    <span class="welcome-text H4Headline"><span>Welcome</span></span>
    <div class="logohomestaytransparent">
      <img
        src="{{ asset('/') }}img/logo-transparent-lg.png"
        alt="logohomestaytransparent4I206"
        class="logohomestaytransparent2"
      />
    </div>
    <span class="lorem-text Caption">
      <span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultrices
        lorem augue aliquet pulvinar. Sed sagittis ultrices in posuere nulla
        rhoncus in porta quis.
      </span>
    </span>
  </div>
</div>