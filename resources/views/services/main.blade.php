@extends('layouts.services')

@section('title', 'PastiFIX - Services')

@section('content')

    <header class="services-header">
        <div class="container" style="padding-top: 80px; padding-bottom: 50px;">
            <h1>Services</h1>
        </div>
    </header>

    <div class="container">
        <div class="search-bar-container">
            <form action="#">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Search Services"
                        aria-label="Search Services">
                    <button class="btn btn-warning btn-lg px-4" type="button" id="button-addon2">
                        <i class="bi bi-search"></i> Search
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="container mt-4 mt-md-5">

        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </nav>

        <div class="row">

            <div class="col-lg-3">
                <div class="card filter-card">
                    <div class="card-header bg-white filter-header d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" href="#collapseFilter" role="button">
                        <span>Speciality</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="collapse show" id="collapseFilter">
                        <div class="filter-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkHome" checked>
                                <label class="form-check-label" for="checkHome">Home</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkElectricity">
                                <label class="form-check-label" for="checkElectricity">Electricity</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkConsultant">
                                <label class="form-check-label" for="checkConsultant">Consultant</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkRoad">
                                <label class="form-check-label" for="checkRoad">Road</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkLorem">
                                <label class="form-check-label" for="checkLorem">Lorem</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkIpsum">
                                <label class="form-check-label" for="checkIpsum">Ipsum</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkLorem2">
                                <label class="form-check-label" for="checkLorem2">Lorem</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Showing 13 Products</span>
                    <div class="col-md-4 col-lg-3">
                        <select class="form-select">
                            <option selected>Sort By: Popular</option>
                            <option value="1">Sort By: Harga Terendah</option>
                            <option value="2">Sort By: Harga Tertinggi</option>
                            <option value="3">Sort By: Terbaru</option>
                        </select>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                    <div class="col">
                        <a href="{{ route('services.detail') }}" class="text-decoration-none text-dark">
                            <div class="card service-card h-100">
                                <img src="https://placehold.co/600x400/e9ecef/e9ecef" class="card-img-top"
                                    alt="Service Image">
                                <div class="card-body">
                                    <h5 class="card-title">Bocor</h5>
                                    <small class="text-muted">Mulai dari</small>
                                    <p class="card-price">Rp250.000</p>
                                    <span class="badge bg-info-subtle text-info-emphasis rounded-pill">
                                        <i class="bi bi-search me-1"></i> Perlu Survei
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a href="{{ route('services.detail') }}" class="text-decoration-none text-dark">
                            <div class="card service-card h-100">
                                <img src="https://placehold.co/600x400/e9ecef/e9ecef" class="card-img-top"
                                    alt="Service Image">
                                <div class="card-body">
                                    <h5 class="card-title">Jalan</h5>
                                    <small class="text-muted">Mulai dari</small>
                                    <p class="card-price">Rp250.000</p>
                                    <span class="badge bg-info-subtle text-info-emphasis rounded-pill">
                                        <i class="bi bi-search me-1"></i> Perlu Survei
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a href="{{ route('services.detail') }}" class="text-decoration-none text-dark">
                            <div class="card service-card h-100">
                                <img src="https://placehold.co/600x400/e9ecef/e9ecef" class="card-img-top"
                                    alt="Service Image">
                                <div class="card-body">
                                    <h5 class="card-title">Konslet</h5>
                                    <small class="text-muted">Mulai dari</small>
                                    <p class="card-price">Rp250.000</p>
                                    <span class="badge bg-info-subtle text-info-emphasis rounded-pill">
                                        <i class="bi bi-search me-1"></i> Perlu Survei
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a href="{{ route('services.detail') }}" class="text-decoration-none text-dark">
                            <div class="card service-card h-100">
                                <img src="https://placehold.co/600x400/e9ecef/e9ecef" class="card-img-top"
                                    alt="Service Image">
                                <div class="card-body">
                                    <h5 class="card-title">Lorem</h5>
                                    <small class="text-muted">Mulai dari</small>
                                    <p class="card-price">Rp250.000</p>
                                    <span class="badge bg-info-subtle text-info-emphasis rounded-pill">
                                        <i class="bi bi-search me-1"></i> Perlu Survei
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a href="{{ route('services.detail') }}" class="text-decoration-none text-dark">
                            <div class="card service-card h-100">
                                <img src="https://placehold.co/600x400/e9ecef/e9ecef" class="card-img-top"
                                    alt="Service Image">
                                <div class="card-body">
                                    <h5 class="card-title">Ipsum</h5>
                                    <small class="text-muted">Mulai dari</small>
                                    <p class="card-price">Rp250.000</p>
                                    <span class="badge bg-info-subtle text-info-emphasis rounded-pill">
                                        <i class="bi bi-search me-1"></i> Perlu Survei
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a href="{{ route('services.detail') }}" class="text-decoration-none text-dark">
                            <div class="card service-card h-100">
                                <img src="https://placehold.co/600x400/e9ecef/e9ecef" class="card-img-top"
                                    alt="Service Image">
                                <div class="card-body">
                                    <h5 class="card-title">Lorem</h5>
                                    <small class="text-muted">Mulai dari</small>
                                    <p class="card-price">Rp250.000</p>
                                    <span class="badge bg-info-subtle text-info-emphasis rounded-pill">
                                        <i class="bi bi-search me-1"></i> Perlu Survei
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a href="{{ route('services.detail') }}" class="text-decoration-none text-dark">
                            <div class="card service-card h-100">
                                <img src="https://placehold.co/600x400/e9ecef/e9ecef" class="card-img-top"
                                    alt="Service Image">
                                <div class="card-body">
                                    <h5 class="card-title">Ipsum</h5>
                                    <small class="text-muted">Mulai dari</small>
                                    <p class="card-price">Rp250.000</p>
                                    <span class="badge bg-info-subtle text-info-emphasis rounded-pill">
                                        <i class="bi bi-search me-1"></i> Perlu Survei
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a href="{{ route('services.detail') }}" class="text-decoration-none text-dark">
                            <div class="card service-card h-100">
                                <img src="https://placehold.co/600x400/e9ecef/e9ecef" class="card-img-top"
                                    alt="Service Image">
                                <div class="card-body">
                                    <h5 class="card-title">Lorem</h5>
                                    <small class="text-muted">Mulai dari</small>
                                    <p class="card-price">Rp250.000</p>
                                    <span class="badge bg-info-subtle text-info-emphasis rounded-pill">
                                        <i class="bi bi-search me-1"></i> Perlu Survei
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a href="{{ route('services.detail') }}" class="text-decoration-none text-dark">
                            <div class="card service-card h-100">
                                <img src="https://placehold.co/600x400/e9ecef/e9ecef" class="card-img-top"
                                    alt="Service Image">
                                <div class="card-body">
                                    <h5 class="card-title">Ipsum</h5>
                                    <small class="text-muted">Mulai dari</small>
                                    <p class="card-price">Rp250.000</p>
                                    <span class="badge bg-info-subtle text-info-emphasis rounded-pill">
                                        <i class="bi bi-search me-1"></i> Perlu Survei
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="text-center mt-5 mb-5">
                    <button class="btn btn-outline-dark btn-lg px-5">Load more</button>
                </div>

            </div>
        </div>
    </div>
@endsection
