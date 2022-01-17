      <!---navBar-->
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #6b6864">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="color: #ffffff;">
              <img src="{{url('public') }}/dist/img/book-stack.png" alt="" width="45" height="35" class="d-inline-block align-text-top">
            Blog
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('artikel') }}" style="color: #ffffff;"><i class="fas fa-home"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #ffffff;"><i class="fas fa-bookmark"></i>Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}" style="color: #ffffff;"><i class="fas fa-user" ></i>About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #ffffff;"><i class="fas fa-sign-in-alt"></i>Login</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
<!---akhir nav--->

  <!-- Page header with logo and tagline-->

  <header class="py-5 border-bottom mb-4" style="background-color: #918d87;">
    <div class="container">
      <div id="runningtext">
        <marquee behavior="scroll" scrollamout="30" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
          Selamat Membaca Artikel Kami Temukan Dunia Baru
        </marquee>
      </div>
    </div>
</header>
