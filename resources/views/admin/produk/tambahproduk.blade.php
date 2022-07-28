@extends('masteradmin')
@section('content')

<div class="page-inner">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Produk</strong>
        </div>
        <div class="card-body card-block">
            <form action="">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Produk</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
                    @error('name')<div class="text-muted">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="nomor_whatsapp" class="form-control-label">Nomor Whatsapp</label>
                    <input type="text" name="nomor_whatsapp" value="{{ old('nomor_whatsapp') }}" class="form-control @error('nomor_whatsapp') is-invalid @enderror">
                    @error('nomor_whatsapp')<div class="text-muted">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="provinsi" class="form-control-label">Provinsi</label>
                    <input type="text" name="provinsi" value="{{ old('provinsi') }}" class="form-control @error('provinsi') is-invalid @enderror">
                    @error('provinsi')<div class="text-muted">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="kota" class="form-control-label">Kota</label>
                    <input type="text" name="kota" value="{{ old('kota') }}" class="form-control @error('kota') is-invalid @enderror">
                    @error('kota')<div class="text-muted">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="kecamatan" class="form-control-label">Kecamatan</label>
                    <input type="text" name="kecamatan" value="{{ old('kecamatan') }}" class="form-control @error('kecamatan') is-invalid @enderror">
                    @error('kecamatan')<div class="text-muted">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="kelurahan" class="form-control-label">Kelurahan</label>
                    <input type="text" name="kelurahan" value="{{ old('kelurahan') }}" class="form-control @error('kelurahan') is-invalid @enderror">
                    @error('kelurahan')<div class="text-muted">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="harga" class="form-control-label">Harga</label>
                    <input type="number" name="harga" value="{{ old('harga') }}" class="form-control @error('harga') is-invalid @enderror">
                    @error('harga')<div class="text-muted">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="jasa" class="form-control-label">Jasa</label>
                    <input type="text" name="jasa" value="{{ old('jasa') }}" class="form-control @error('jasa') is-invalid @enderror">
                    @error('jasa')<div class="text-muted">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="kelurahan" class="form-control-label">Deskripsi</label>
                    <textarea name="deskripsi" class="ckeditor form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')<div class="text-muted">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-block">
                        Tambah Produk
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection