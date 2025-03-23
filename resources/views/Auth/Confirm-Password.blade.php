@extends('Main')

@section('title') 
Confirm-Password
@endsection 

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
                <div class="card-header bg-white text-center p-4 border-0">
                    <h3 class="font-weight-bold mb-2">Konfirmasi Password</h3>
                    <p class="text-muted mb-0">Ini adalah area yang aman. Konfirmasikan password Anda sebelum melanjutkan.</p>
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

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <!-- <input type="password" class="form-control rounded-pill" id="password" name="password" required autocomplete="current-password"> -->
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary py-2 rounded-pill">Konfirmasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>