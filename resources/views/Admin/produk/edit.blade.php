@extends('appAdmin')
@section('content')

<form action="{{route('produk.update',$produks->produk_id)}}" method="POST"  class="row g-3 mt-4" enctype="multipart/form-data">
    @csrf 
    @method('put')
    <div class="col-md-5">
      <label for="inputPassword4" class="form-label">Nama Barang</label>
      <input name="nama_barang" type="" class="form-control" id="inputPassword4" value="{{old('nama_barang',$produks->nama_barang)}}" required>
    </div>
    <div class="col-md-2">
      <label for="inputPassword4" class="form-label">Harga</label>
      <input name="harga" class="form-control" id="inputPassword4"  value="{{old('harga',$produks->harga)}} "required>
    </div>
    <div class="col-md-2">
      <label for="inputPassword4" class="form-label">Stok</label>
      <input name="stok" type="text" class="form-control" id="inputAddress"  value="{{old('stok',$produks->stok)}}" required>
    </div>
    <div class="col-md-1">
        <label for="inputCity" class="form-label">Kategori</label>
        <select name="kategori" class="form-select" aria-label="Default select example" >
            <option value=""> Kategori Liga</option>
            <option value="1" @if ($produks->kategori == '1') selected @endif>Liga Spanyol</option>
            <option value="2" @if ($produks->kategori == '2') selected @endif>Liga Italy</option>
            <option value="3" @if ($produks->kategori == '3') selected @endif>Liga Inggris</option>
            <option value="4" @if ($produks->kategori == '4') selected @endif>Liga paris</option>
            <option value="5" @if ($produks->kategori == '5') selected @endif>Liga German</option>
            <option value="6" @if ($produks->kategori == '6') selected @endif>Negara</option>
          </select>
      </div>
    {{-- tombol chose  --}}
    <div class="col-md-3 mt-3">
      <label for="inputCity" class="form-label">Gambar</label>
      <input name="foto" type="file" class="form-control" id="inputGroupFile02" value="{{old('gambar',$produks->foto)}}"required>
    </div>
    <div class="col-md-6 mt-3">
      <label for="inputZip" class="form-label">Deskripsi</label>
      <textarea name="keterangan" class="form-control" placeholder="" id="floatingTextarea"></textarea>
  </div>
  
  <div class="col-md-10 mt-5 ">
    <div class="form-check">
      <h6>*keterangan untuk format ukuran gambar 2448x 2448</h6>
      <h6>*Gambar tidak boleh kosong</h6>
    </div>
  </div>

    <div class="col-md-12 mt-5">
      <div class="form-check">
        <label class="form-check-label" for="gridCheck">
          Tambah
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Edit Barang</button>
    </div>
  </form>
  
  @endsection