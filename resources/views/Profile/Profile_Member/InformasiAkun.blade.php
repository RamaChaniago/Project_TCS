<!-- Profile Content Column -->
<div class="col-lg-9 col-md-8">
  <!-- Main Content Area -->
  <div class="container-fluid p-4">
      @yield('content')
  </div>
  <div class="profile-content fade-in">
      <!-- Info Section -->
      <div class="content-section active" id="info-section">
          <h3 class="mb-3">Informasi Akun</h3>
          <p class="text-muted mb-4">Informasi dasar tentang akun Anda</p>

          <div class="row mb-3">
              <div class="col-sm-4">
                  <p class="mb-0">Nama Lengkap</p>
              </div>
              <div class="col-sm-8">
                  <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
              </div>
          </div>
          <hr>
          <div class="row mb-3">
              <div class="col-sm-4">
                  <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-8">
                  <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
              </div>
          </div>
          <hr>
          <div class="row mb-3">
              <div class="col-sm-4">
                  <p class="mb-0">No. Telepon</p>
              </div>
              <div class="col-sm-8">
                  <p class="text-muted mb-0">{{ Auth::user()->phone }}</p>
              </div>
          </div>
          <hr>
          <div class="row mb-3">
              <div class="col-sm-4">
                  <p class="mb-0">Alamat</p>
              </div>
              <div class="col-sm-8">
                  <p class="text-muted mb-0"></p>
              </div>
          </div>
      </div>
