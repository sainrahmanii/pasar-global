@extends('masteradmin')
@section('content')

<div class="page-inner">
    <div class="col-md-12 mt-2">
        <div class="card">
            <div class="card-header ">
                <h4 class="card-title">Data Registrasi Produk</h4>
                <!-- <form class="d-flex col-md-4" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="multi-filter-select" class="display table table-striped table-hover">
                        <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Nomer Registrasi</th>
                                <th>Nama Produk</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Jasa</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                @foreach($item as $item)
                                <td>{{ $loop->iteration }}</td>
                                <td>MDT - {{ $item->no_registrasi }}</td>
                                <td>{{ $item->nama_produk }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->user->email }}</td>
                                <td>
                                    {{ $item->provinsi }},
                                    {{ $item->kota_kabupaten }},
                                    {{ $item->kecamatan }},
                                    {{ $item->kelurahan_desa }}
                                </td>
                                <td>{{ $item->jasa }}</td>
                                <td>{{ number_format((int)$item->harga) }}</td>
                                <td>
                                    @if($item ->status_pembayaran_registrasi == 'PENDING')
                                    <span class="badge badge-info">
                                        @elseif($item ->status_pembayaran_registrasi == 'SUCCESS')
                                        <span class="badge badge-success">
                                            @elseif($item ->status_pembayaran_registrasi == 'FAILED')
                                            <span class="badge badge-danger">
                                                <!-- </span> -->
                                                @endif
                                                {{$item ->status_pembayaran_registrasi}}
                                            </span>
                                        </span>
                                </td>
                                <td>
                                    <button class="btn btn-sm badge-info" type="button" data-toggle="modal" data-target="#modalproduk{id}"><i class="fas fa-eye"></i></button>

                                    <!-- modal ubah status -->
                                    <div class="modal fade" id="modalproduk{id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body mx-auto">

                                                    <!-- <h2 class="text-center text-uppercase text-black font-serif text-bold">Change Status</h2> -->

                                                    <div class="row">

                                                        <a href="{{ route('registration-products.set-status', $item->id) }}?status=SUCCESS" class="btn btn-sm btn-success m-1">SUCCESS</a>

                                                        <a href="{{ route('registration-products.set-status', $item->id) }}?status=FAILED" class="btn btn-sm btn-danger m-1">FAILED</a>

                                                        <a href="{{ route('registration-products.set-status', $item->id) }}?status=PENDING" class="btn btn-sm btn-info m-1">PENDING</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal -->

                                    <a href="{{ route('registration-products.delete', $item->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm badge-danger mt-2" type="button"><i class="fas fa-trash-alt"></i></button>
                                    </a>

                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection