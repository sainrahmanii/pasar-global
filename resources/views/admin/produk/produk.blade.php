@extends('masteradmin')
@section('content')

<div class="page-inner">
    <!-- card user -->
    <div class="row mt-3">
        
        @foreach($item as $item)
        @if($item->status_pembayaran_registrasi == 'SUCCESS')
        <div class="col-md-4">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-category">Nama Produk: <span class="float-right">{{ $item->nama_produk }}</span></div>
                    <div class="card-category">Harga : <span class="float-right">Rp {{ number_format((int)$item->harga) }}</span></div>
                    <div class="card-category">Jasa : <span class="float-right">{{ $item->jasa }}</span></div>
                    <div class="card-category">Whatsapp : <span class="float-right"><a href="http://wa.me/{{ $item->user->no_whatsapp }}">0{{ $item->user->no_whatsapp }}</a></span></div>
                    <button class="btn btn-default mt-2 btn-icon btn-round float-right" data-toggle="modal" data-target="#modalproduk{id}" type="button"><i class="fa fa-plus"></i></button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalproduk{id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="tect-center" whidth="30px">{{ $item->foto }}</div>
                        <div class="card-category">Nama Produk: <span class="float-right">{{ $item->nama_produk }}</span></div>
                        <div class="card-category">Harga : <span class="float-right">Rp {{ number_format((int)$item->harga) }}</span></div>
                        <div class="card-category">Jasa : <span class="float-right">{{ $item->jasa }}</span></div>
                        <div class="card-category">Alamat : <span class="float-right">{{ $item->provinsi }}, {{ $item->kota_kabupaten }}, {{ $item->kecamatan }}</span></div>
                        <button type="button" class="btn btn-danger btn-round btn-icon float-right mt-3" data-dismiss="modal"><i class="fab fa-slack-hash"></i></button>
                    </div>
                </div>
            </div>
        </div>
        @elseif($item->status_pembayaran_registrasi !== 'SUCCESS')
        <img src="../assets/img/ikbal.jpeg" width="50%" class="mx-auto" alt="">
        @endif
        @endforeach
        
    </div>

    <!-- <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav> -->

</div>

@endsection