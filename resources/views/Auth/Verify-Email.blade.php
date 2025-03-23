@extends('Main')

@section('title') 
Verify Email
@endsection 

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
                <div class="card-header bg-white text-center p-4 border-0">
                    <div class="mb-3">
                        <i class="fas fa-envelope-open-text text-primary fa-3x"></i>
                    </div>
                    <h3 class="font-weight-bold mb-2">Verifikasi Email</h3>
                    <p class="text-muted mb-0">Silakan periksa email Anda untuk tautan verifikasi</p>
                </div>
                <div class="card-body p-4">
                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success mb-3">
                            Email verifikasi baru telah dikirim ke alamat email yang Anda berikan saat pendaftaran.
                        </div>
                    @endif

                    <div class="mb-4 text-center">
                        <p>Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi. Jika Anda tidak menerima email tersebut, kami dengan senang hati akan mengirimkannya kembali.</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary rounded-pill px-4">
                                Kirim Ulang Email Verifikasi
                            </button>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary rounded-pill px-4">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Help Box -->
            <div class="card border-0 shadow-sm mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body p-4">
                    <h5 class="d-flex align-items-center">
                        <i class="fas fa-info-circle text-primary me-2"></i>
                        Informasi Penting
                    </h5>
                    <p class="mb-2">Pastikan untuk memeriksa folder spam/junk jika Anda tidak menemukan email di inbox Anda.</p>
                    <p class="mb-0">Jika Anda masih mengalami masalah, silakan hubungi tim dukungan kami di <a href="mailto:support@toeflpct.com" class="text-decoration-none">support@toeflpct.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Benefits Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 data-aos="fade-up">Manfaat Menjadi Member ToeflPCT</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">Verifikasi email Anda untuk mulai menikmati semua keuntungan ini</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="fas fa-laptop-code text-white fa-lg"></i>
                            </div>
                            <h4 class="mb-0">Akses Penuh</h4>
                        </div>
                        <p class="text-muted">Akses tidak terbatas ke semua materi belajar, latihan soal, dan simulasi tes TOEFL.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="fas fa-comments text-white fa-lg"></i>
                            </div>
                            <h4 class="mb-0">Konsultasi Tutor</h4>
                        </div>
                        <p class="text-muted">Konsultasi langsung dengan tutor berpengalaman untuk membantu peningkatan skor TOEFL Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="fas fa-medal text-white fa-lg"></i>
                            </div>
                            <h4 class="mb-0">Sertifikat Resmi</h4>
                        </div>
                        <p class="text-muted">Dapatkan sertifikat resmi setelah menyelesaikan kursus atau ujian TOEFL yang diakui secara internasional.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>