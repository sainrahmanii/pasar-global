@extends('masteradmin')
@section('content')


<div class="page-inner mt-2">
    <div class="row mt-2 text-center">
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">Statistik Keseluruhan</div>
                    <div class="d-flex flex-wrap justify-content-around mt-2 pb-2 pt-4">
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-1"></div>
                            <h6 class="fw-bold mt-3 mb-0">Pengguna</h6>
                        </div>
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-2"></div>
                            <h6 class="fw-bold mt-3 mb-0">Penjualanan</h6>
                        </div>
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-3"></div>
                            <h6 class="fw-bold mt-3 mb-0">Produk</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">Grafik Penjualanan</div>
                    <div class="row py-3 mt-2">
                        <div class="col-md-4 d-flex flex-column justify-content-around">
                            <div>
                                <h6 class="fw-bold text-uppercase text-success op-8">Total Pendapatan</h6>
                                <h3 class="fw-bold">Rp 2.000.000</h3>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div id="chart-container">
                                <canvas id="totalIncomeChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card full-height">
        <div class="card-body">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.944277244204!2d108.4033913141433!3d-6.776636968153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f21ca5c68daab%3A0xbcba1c400d995bd3!2sMa&#39;had%20Daruttauhid%20AL%20Ishlah%20Bobos!5e0!3m2!1sid!2sid!4v1658980389090!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

@endsection