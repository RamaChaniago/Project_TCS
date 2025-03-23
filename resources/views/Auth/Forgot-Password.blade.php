@extends('Main')

@section('title') 
Forgot Password
@endsection 

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
                <div class="card-header bg-white text-center p-4 border-0">
                    <h3 class="font-weight-bold mb-2">Lupa Password</h3>
                    <p class="text-muted mb-0">Masukkan email Anda dan kami akan mengirimkan tautan untuk reset password</p>
                </div>
                <div class="card-body p-4">
                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="alert alert-success mb-3">
                            {{ session('status') }}
                        </div>
                    @endif

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

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <!-- <input type="email" class="form-control rounded-pill" id="email" name="email" value="{{ old('email') }}" required autofocus> -->
                        </div>

                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-primary py-2 rounded-pill">Kirim Tautan Reset Password</button>
                        </div>
                        
                        <div class="text-center mt-3">
                            <a href="{{ route('login') }}" class="text-decoration-none">
                                <i class="fas fa-arrow-left me-1"></i> Kembali ke halaman login
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Help Box -->
            <div class="card border-0 shadow-sm mt-4 bg-light" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body p-4">
                    <h5 class="d-flex align-items-center">
                        <i class="fas fa-info-circle text-primary me-2"></i>
                        Butuh bantuan?
                    </h5>
                    <p class="mb-0">Jika Anda mengalami kesulitan dalam mengakses akun, silakan hubungi tim dukungan kami melalui:</p>
                    <ul class="mt-2 ps-3">
                        <li>Email: support@toeflpct.com</li>
                        <li>WhatsApp: +62 812-3456-7890</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>