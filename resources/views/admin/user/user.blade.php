@extends('masteradmin')
@section('content')

<div class="page-inner">
    <div class="collapse" id="search-nav">
        <form class="navbar-left navbar-form nav-search ">
            <div class="input-group">
                <input type="text" placeholder="Search ..." class="form-control">
            </div>
        </form>
    </div>

    <!-- card user -->
    <div class="row mt-3">
        @foreach($user as $u)
        <div class="col-md-4">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-category">Nama : <span class="float-right">{{ $u->name}}</span></div>
                    <div class="card-category">Email : <span class="float-right">{{ $u->email }}</span></div>
                    <div class="card-category">No. Whatsapp : <span class="float-right">+62{{ $u->no_whatsapp }}</span></div>
                    <button class="btn btn-default mt-2 btn-icon btn-round float-right" data-toggle="modal" data-target="#modalUser{{ $u->id }}" type="button"><i class="fa fa-plus"></i></button>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalUser{{ $u->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="card-category">Nama : <span class="float-right">{{ $u->name }}</span></div>
                        <div class="card-category">Email : <span class="float-right">{{ $u->email }}</span></div>
                        <div class="card-category">No. Whatsapp : <span class="float-right"><a href="http://wa.me/+62{{ $u->no_whatsapp }}">+62{{ $u->no_whatsapp }}</a></span></div>
                        <div class="card-category">Alamat : <span class="float-right">{{ $u->alamat }}</span></div>
                        <div class="card-category">Role : <span class="float-right">{{ $u->role }}</span></div>
                        <button type="button" class="btn btn-danger btn-round btn-icon float-right mt-3" data-dismiss="modal"><i class="fab fa-slack-hash"></i></button>
                    </div>
                </div>
            </div>
        </div>
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