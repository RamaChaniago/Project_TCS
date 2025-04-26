@extends('Main')

@section('title')
Login
@endsection

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
                <div class="card-header bg-white text-center p-4 border-0">
                    <h3 class="font-weight-bold mb-2">Masuk ke Akun Anda</h3>
                    <p class="text-muted mb-0">Akses semua kursus dan materi TOEFL Anda</p>
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

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" autofocus>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-pill @error('password') is-invalid @enderror" id="password" name="password" autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-primary py-2 rounded-pill">Login</button>
                        </div>

                    </form>
                </div>
                <div class="card-footer bg-white text-center border-0 p-4">
                    <p class="mb-0">Belum punya akun? <a href="/register" class="text-decoration-none fw-bold">Register Now</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
