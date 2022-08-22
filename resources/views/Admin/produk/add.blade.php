@extends('appAdmin')
@section('content')

<form action="{{route('produk.store')}}" method="POST"  class="row g-3 mt-4" enctype="multipart/form-data">
  @csrf 
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label mb-5"><strong>Penambahan produk </strong></label>
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Nama Barang</label>
    <input name="nama_barang" type="" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">Harga</label>
    <input name="harga" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-1">
    <label for="inputCity" class="form-label">Stok</label>
    <input name="stok" type="text" class="form-control  " id="inputCity">
  </div>

  <div class="col-md-1">
    <label for="inputCity" class="form-label">Kategori</label>
    <select name="kategori" class="form-select" aria-label="Default select example">
        <option value="" selected>Kategori Liga</option>
        <option value="Liga Spanyol">Liga Spanyol</option>
        <option value="Liga Italy">Liga Italy</option>
        <option value="Liga Inggris">Liga Inggris</option>
        <option value="Liga paris">Liga paris</option>
        <option value="Liga German">Liga German</option>
        <option value="Negara">Negara</option>
      </select>
  </div>
  {{-- tombol chose  --}}
  <div class="col-md-5 mt-3">
    <label for="inputCity" class="form-label">Gambar</label>
    <input name="foto" type="file" class="form-control" id="inputGroupFile02">
  </div>
  <div class="col-md-6 mt-3">
      <label for="inputZip" class="form-label">Deskripsi</label>
      <textarea name="keterangan" class="form-control" placeholder="" id="floatingTextarea"></textarea>
  </div>
  <div class="col-md-10 mt-5 ">
    <div class="form-check">
      <h6>*Gambar tidak boleh kosong</h6>
    </div>
  </div>
  <div class="col-md-12 mt-5">
    <div class="form-check">
      <label class="form-check-label" for="gridCheck"><strong>
        Tambah
      </label></strong>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Input Barang</button>
  </div>
</form>

@endsection