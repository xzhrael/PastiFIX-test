@extends('layouts.services')

@section('title', 'Permintaan Terkirim')

@section('content')
<div class="container" style="padding-top: 150px; padding-bottom: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="card shadow-sm border-0">
                <div class="card-body p-5">
                    <i class="bi bi-check-circle-fill display-1 text-success mb-3"></i>
                    <h1 class="mb-3">Permintaan Terkirim!</h1>
                    <p class="lead text-muted">
                        Permintaan Anda telah berhasil dikirim. Admin kami akan segera memverifikasi pesanan Anda.
                    </p>
                    <p>
                        Anda dapat melacak status pesanan dan melihat harga final dari Mandor di halaman **Pesanan Saya**.
                    </p>

                    <a href="{{ route('services.my-orders') }}" class="btn btn-brand btn-lg mt-3 px-5">
                        Lihat Pesanan Saya
                    </a>
                    <a href="/" class="btn btn-outline-brand btn-lg mt-3 px-5">
                        Kembali ke Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
