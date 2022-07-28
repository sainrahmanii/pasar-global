@extends('masteradmin')
@section('content')

<div class="page-inner">
    <div class="col-md-12 mt-2">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Pesanan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="multi-filter-select" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nomer Checkout</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Jasa</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>TRX-213453</td>
                                <td>Admin</td>
                                <td>admin@gmail.com</td>
                                <td>Ds. Nganu, Kec. Ngene Kab. Mbuuh Prov. Keder</td>
                                <td>Rias Pengantin</td>
                                <td>Rp 500.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection