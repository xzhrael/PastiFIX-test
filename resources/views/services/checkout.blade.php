@extends('layouts.services')

@section('title', 'Checkout')

@section('content')
    <header class="services-header">
        <div class="container" style="padding-top: 80px; padding-bottom: 50px;">
            <h1>Checkout</h1>
        </div>
    </header>
    <div class="container" style="padding-top: 50px; padding-bottom: 50px;">

        <div class="row g-5">

            <div class="col-lg-7">
                <h4 class="mb-4 fw-bold">Pilih Alamat</h4>

                <div class="address-card-wrapper">
                    <input type="radio" name="addressOption" id="address1" class="address-radio" checked>
                    <label for="address1" class="address-card">
                        <div class="address-card-body">
                            <div class="fw-bold">
                                Rumah (Utama)
                                <span class="badge bg-warning-subtle text-warning-emphasis fw-medium ms-2">RUMAH</span>
                            </div>
                            <div class="text-muted small my-2">
                                Jl. Merdeka No. 45, Kebayoran Baru, Jakarta Selatan, DKI Jakarta 12120
                            </div>
                            <div class="text-muted small">
                                0812-3456-7890
                            </div>
                        </div>
                        <div class="address-card-actions">
                            <button class="btn btn-icon"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-icon"><i class="bi bi-x-lg"></i></button>
                        </div>
                    </label>
                </div>

                <div class="address-card-wrapper mt-3">
                    <input type="radio" name="addressOption" id="address2" class="address-radio">
                    <label for="address2" class="address-card">
                        <div class="address-card-body">
                            <div class="fw-bold">
                                Kantor
                                <span class="badge bg-secondary-subtle text-secondary-emphasis fw-medium ms-2">KANTOR</span>
                            </div>
                            <div class="text-muted small my-2">
                                Menara Sudirman Lt. 10, Jl. Jend. Sudirman Kav. 60, Jakarta Pusat, DKI Jakarta 10220
                            </div>
                            <div class="text-muted small">
                                (021) 520-1234
                            </div>
                        </div>
                        <div class="address-card-actions">
                            <button class="btn btn-icon"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-icon"><i class="bi bi-x-lg"></i></button>
                        </div>
                    </label>
                </div>

                <div class="add-new-address-link text-center my-4">
                    <div class="divider-line"></div>
                    <a href="#" class="btn btn-icon-add" data-bs-toggle="modal" data-bs-target="#newAddressModal">
                        <i class="bi bi-plus"></i>
                    </a>
                    <div class="mt-2 text-muted fw-medium">Tambah Alamat Baru</div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card shadow-sm border-0 checkout-summary-card">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-4">Ringkasan Pesanan</h5>

                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Biaya Awal (Estimasi)</span>
                            <span class="fw-medium">Rp250.000</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Biaya Layanan</span>
                            <span class="fw-medium">Rp15.000</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Pajak (Estimasi)</span>
                            <span class="fw-medium">Rp2.500</span>
                        </div>

                        <hr class="my-3">

                        <div class="d-flex justify-content-between fw-bold fs-5 mb-4">
                            <span>Total (Estimasi)</span>
                            <span>Rp267.500</span>
                        </div>

                        <a href="{{ route('services.order') }}" class="btn btn-brand btn-lg w-100 fw-bold">
                            Kirim Permintaan Survei
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="newAddressModal" tabindex="-1" aria-labelledby="newAddressModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newAddressModalLabel">Tambahkan Alamat Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="modalAddressLabel" class="form-label">Label Alamat</label>
                                <input type="text" class="form-control" id="modalAddressLabel"
                                    placeholder="Contoh: Rumah, Kantor">
                            </div>
                            <div class="col-12">
                                <label for="modalAddress" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" id="modalAddress" rows="3"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="modalCity" class="form-label">Kota</label>
                                <input type="text" class="form-control" id="modalCity">
                            </div>
                            <div class="col-md-6">
                                <label for="modalZip" class="form-label">Kode Pos</label>
                                <input type="text" class="form-control" id="modalZip">
                            </div>
                            <div class="col-12">
                                <label for="modalPhone" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="modalPhone" placeholder="0812...">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-brand">Simpan Alamat</button>
                </div>
            </div>
        </div>
    </div>
@endsection
