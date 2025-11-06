<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PastiFIX - Order Sukses</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">

</head>

<body>
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
                            Anda dapat melacak status pesanan dan melihat harga final dari Mandor di halaman
                            <strong>Pesanan Saya</strong>.
                        </p>

                        <a href="{{ route('profil.activity') }}" class="btn btn-brand btn-lg mt-3 px-5">
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
</body>

</html>
