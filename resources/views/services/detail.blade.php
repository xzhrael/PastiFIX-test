@extends('layouts.services')

@section('title', 'Detail Jasa')

@section('content')
    <header class="services-header">
        <div class="container" style="padding-top: 80px; padding-bottom: 50px;">
            <h1>Detail Jasa</h1>
        </div>
    </header>
    <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://placehold.co/800x600/e9ecef/e9ecef" class="img-fluid rounded shadow-sm" alt="Detail Jasa">
            </div>

            <div class="col-lg-6">
                <h2>Perbaikan Atap Bocor (Contoh Jasa)</h2>
                <h3 class="card-price mb-2">Mulai dari Rp250.000</h3>

                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading"><i class="bi bi-info-circle-fill"></i> Perhatian!</h4>
                    <p>Harga yang tertera adalah <strong>perkiraan awal</strong> atau <strong>biaya survei</strong>.</p>
                    <hr>
                    <p class="mb-0">
                        Harga final akan ditentukan oleh <strong>Mandor</strong> setelah melakukan <strong>survei</strong> di lokasi Anda.
                    </p>
                </div>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                <ul class="list-unstyled mb-4">
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Tukang profesional dan bersertifikat.</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Survei lokasi oleh mandor.</li>
                </ul>

                <a href="{{ route('services.checkout') }}" class="btn btn-brand btn-lg px-5">
                    <i class="bi bi-calendar-check me-2"></i> Ajukan Permintaan Survei
                </a>
            </div>
        </div>
    </div>
@endsection
