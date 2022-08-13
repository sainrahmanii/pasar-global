@extends('masteradmin')
@section('content')

<div class="page-inner">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Produk</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="name" class="form-control-label">Nama Produk</label>
                        <input type="text" name="nama_produk" value="{{ old('nama_produk') }}" class="form-control @error('nama_produk') is-invalid @enderror">
                        @error('nama_produk')<div class="text-muted">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-6">
                        <label for="jasa" class="form-control-label">Jasa</label>
                        <input type="text" name="jasa" value="{{ old('jasa') }}" class="form-control @error('jasa') is-invalid @enderror">
                        @error('jasa')<div class="text-muted">{{ $message }}</div>@enderror
                    </div>
                </div>


                <div class="form-group row">
                    <div class=" col-md-6">
                        <label for="provinsi" class="form-control-label">Provinsi</label>
                        <select name="provinsi" id="prov" class="form-control @error('provinsi') is-invalid @enderror">
                            <option value="{{ old('provinsi') }}">-- Pilih Provinsi --</option>
                            @foreach($provinces as $prov)
                            <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                            @endforeach
                        </select>
                        @error('provinsi')<div class="text-muted">{{ $message }}</div>@enderror
                    </div>

                    <div class=" col-md-6">
                        <label for="kota_kabupaten" class="form-control-label">Kota/Kabupaten</label>
                        <select name="kota_kabupaten" id="kota_kabupaten" class="form-control @error('kota_kabupaten') is-invalid @enderror">
                            <option value="{{ old('kota_kabupaten') }}">-- Pilih Kota/Kabupaten --</option>
                        </select>
                        @error('kota_kabupaten')<div class="text-muted">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class=" col-md-6">
                        <label for="kecamatan" class="form-control-label">Kecamatan</label>
                        <select name="kecamatan" id="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror">
                            <option value="{{ old('kecamatan') }}">-- Pilih Kecamatan --</option>
                        </select>
                        @error('kecamatan')<div class="text-muted">{{ $message }}</div>@enderror
                    </div>

                    <div class=" col-md-6">
                        <label for="kelurahan_desa" class="form-control-label">Kelurahan/Desa</label>
                        <select name="kelurahan_desa" id="kelurahan_desa" class="form-control @error('kelurahan_desa') is-invalid @enderror">
                            <option value="{{ old('kelurahan_desa') }}">-- Pilih Kelurahan/Desa --</option>
                        </select>
                        @error('kelurahan_desa')<div class="text-muted">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="harga" class="form-control-label">Harga</label>
                        <input type="number" name="harga" value="{{ old('harga') }}" class="form-control @error('harga') is-invalid @enderror">
                        @error('harga')<div class="text-muted">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-6">
                        <label for="foto_produk_atau_jasa" class="form-control-label">Foto Produk</label>
                        <input type="file" name="foto_produk_atau_jasa" value="{{ old('foto_produk_atau_jasa') }}" class="form-control @error('foto_produk_atau_jasa') is-invalid @enderror">
                        @error('foto_produk_atau_jasa')<div class="text-muted">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-control-label">Deskripsi</label>
                    <textarea name="deskripsi" class="ckeditor form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')<div class="text-muted">{{ $message }}</div>@enderror
                </div>

                <div class="form-group col-md-4 top-0 end-0">
                    <button class="btn btn-success btn-block" type="submit">
                        Tambah Produk
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection