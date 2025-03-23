@extends('Main')

@section('title') 
Reset Password
@endsection 

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
                <div class="card-header bg-white text-center p-4 border-0">
                    <h3 class="font-weight-bold mb-2">Reset Password</h3>
                    <p class="text-muted mb-0">Buat password baru untuk akun Anda</p>
                </div>
                <div class="card-body p-4">
                    <!-- Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger mb-3">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <!-- <input type="email" class="form-control rounded-pill" id="email" name="email" value="{{ old('email', $request->email) }}" required autofocus> -->
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password Baru</label>
                            <!-- <input type="password" class="form-control rounded-pill" id="password" name="password" required> -->
                            <div class="form-text">Minimal 8 karakter dengan kombinasi huruf dan angka</div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <!-- <input type="password" class="form-control rounded-pill" id="password_confirmation" name="password_confirmation" required> -->
                        </div>

                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-primary py-2 rounded-pill">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Password Tips -->
            <div class="card border-0 shadow-sm mt-4 bg-light" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body p-4">
                    <h5 class="d-flex align-items-center">
                        <i class="fas fa-shield-alt text-primary me-2"></i>
                        Tips Password Aman
                    </h5>
                    <ul class="mt-2 ps-3 mb-0">
                        <li>Gunakan minimal 8 karakter</li>
                        <li>Kombinasikan huruf besar dan kecil</li>
                        <li>Sertakan angka dan simbol khusus</li>
                        <li>Hindari informasi personal seperti tanggal lahir</li>
                        <li>Jangan gunakan password yang sama untuk akun lain</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>