@extends('masteradmin')
@section('content')

<div class="page-inner">
    <div class="col-md-12 mt-2">
    @foreach($transaksi as $transaksi)
    @if($transaksi !== 'null')
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-dark text-center text-xl">Data Pesanan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                
                    <table id="multi-filter-select" class="display table table-striped table-hover text-center">
                        <thead>
                            <tr class="text-center">
                                <th>No.</th>
                                <th>Nomer Checkout</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Jasa</th>
                                <th>Harga</th>
                                <th>Whatsapp Penjual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td>{{ $loop->iteration }}</td>
                                <td>TRX - {{ $transaksi->no_checkout }}</td>
                                <td>{{ $transaksi->user->name }}</td>
                                <td>{{ $transaksi->user->email }}</td>
                                <td>{{ $transaksi->user->alamat }}</td>
                                <td>{{ $transaksi->produk->jasa }}</td>
                                <td>{{ number_format((int)$transaksi->produk->harga) }}</td>
                                <td><a href="https://wa.me/{{ $transaksi->produk->user->no_whatsapp }}">0{{ $transaksi->produk->user->no_whatsapp }}</a></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        @else($transaksi == 'null')
        <!-- <img src="../assets/img/ikbal.jpeg" alt=""> -->
        <h3>transaksi tidak ditemukan</h3>
        @endif
        @endforeach
    </div>
</div>



@endsection