@extends('appAdmin')
@section('content')
<div class="ibox mt-5">
                    <div class="ibox-head mt-5">
                        <div class="ibox-title text-center">Ubah Status Pemesanan </div>
                    </div>
                    <div class="card-body card-block">
                        <form action="{{route('transaksi.update',$pesanans->pesanan_id)}}" class="row g-3" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('put')
                            <div class="col-md-3">
                              <label for="inputStatus" class="form-label"><h6>Status</h6></label>
                              <input name="status" type="text" class="form-control @error('status') is-invalid @enderror" id="inputStatus" placeholder="Ex.2" value="{{old('status',$pesanans->status)}}">
                              @error('status')
                                  <div class="invalid-feedback">{{$message}}</div>
                              @enderror
                            </div>
                            <div class="col-md-2">
                              <label for="inputOngkir" class="form-label"><h6>Ongkir</h6></label>
                              <input name="ongkir" type="text" class="form-control @error('status') is-invalid @enderror" id="inputOngkir" placeholder="Ex.8000" value="{{old('status',$pesanans->ongkir)}}">
                              @error('ongkir')
                                  <div class="invalid-feedback">{{$message}}</div>
                              @enderror
                            </div>
                            <div class="col-md-1">
                              <label for="inputKurir" class="form-label"><h6>Kurir</h6></label>
                                <select name="kurir" id="inputKurir" class="form-select" aria-label="Default select example">
                                  <option value="">- Pilih Kurir -</option>
                                  <option value="J&T" @if ($pesanans->kurir == 'J&T') selected @endif>J&T</option>
                                  <option value="JNE" @if ($pesanans->kurir == 'JNE') selected @endif>JNE</option>
                                  <option value="Sicepat" @if ($pesanans->kurir == 'Sicepat') selected @endif>Sicepat</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <p style="color: red">Keterangan: </p>
                                <p>
                                    Status jika bernilai 1 (Satu), maka pemesan belum membayar pesanan. <br>
                                    Berikan nilai selain 1 (Satu) jika pemesan sudah melakukan pembayaran dan konfirmasi pembayaran.
                                </p>
                            </div>
                            <div class="col-12 mt-3">
                              <button type="submit" class="btn btn-primary">
                                <i class="ti-save"></i> Simpan
                              </button>
                              <a href="{{route('transaksi.index')}}">
                                <button type="button" class="btn btn-secondary">
                                  <i class="ti-back-left"></i> Kembali
                                </button>
                              </a>
                            </div>
                          </form>
                    </div>
                        {{-- {{$barang->links()}} --}}
                    </div>

@endsection