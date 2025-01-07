@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="card mt-3" style="height: 800px">
            <div class="card-body">
                <div class="card-title">Dashboard</div>

                <div class="col-xxl col-xl-12">
                    <div class="card info-card customers-card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                Selamat Datang <span>| {{ auth()->user()->name }}</span>
                            </h5>
                            <div class="d-flex align-items-center justify-content-center">
                                <h2>ANTRIAN KLINIK DOKTER GIGI HADI</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-title">Antrian Masuk</div>

                <div class="row">
                    <!-- Kategori Pencegahan -->
                    <div class="col-xxl col-md-3">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Pencegahan</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bxs-user-plus"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$poliPencegahan}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kategori Restoratifi -->
                    <div class="col-xxl col-md-3">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Restoratifi</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bx-user-circle"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$poliRestoratifi}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kategori Endodontik -->
                    <div class="col-xxl col-md-3">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Endodontik</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bxs-user-voice"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$poliEndodontik}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kategori Periodontal -->
                    <div class="col-xxl col-md-3">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Periodontal</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bxs-group"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$poliPeriodontal}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Kategori Prostodontik -->
                    <div class="col-xxl col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Prostodontik</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bxs-group"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$poliProstodontik}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kategori Estetika Gigi -->
                    <div class="col-xxl col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Estetika Gigi</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bxs-group"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$poliEstetikaGigi}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kategori Gigi Sensitif -->
                    <div class="col-xxl col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Gigi Sensitif</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bx-sad"></i> <!-- Ikon untuk Gigi Sensitif -->
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$poliGigiSensitif}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
