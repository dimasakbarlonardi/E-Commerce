@extends('appAdmin')
@section('content')
<div class="ibox mt-5">
                    <div class="ibox-head mt-5">
                        <div class="ibox-title text-center">Ubah Status Pemesanan </div>
                    </div>
                    <div class="card-body card-block">
                        <form action="{{ route('transaksi.update', $pesanans->pesanan_id) }}" class="row g-3" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('put')
                            <div class="col-md-4">
                              <label for="inputStatus" class="form-label"><h6>Status</h6></label>
                              <select name="status" id="inputKurir" class="form-select">
                                <option value="">- Pilih Status -</option>
                                <option value="Menunggu Konfimasi Admin" @if ($pesanans->status == 'Menunggu Konfimasi Admin') selected @endif>Menunggu Konfimasi Admin</option>
                                <option value="Belum Bayar" @if ($pesanans->status == 'Belum Bayar') selected @endif>Belum Bayar</option>
                                <option value="Sudah Bayar" @if ($pesanans->status == 'Sudah Bayar') selected @endif>Sudah Bayar</option>
                              </select>
                              @error('status')
                                  <p class="invalid-feedback">{{$message}}</p>
                              @enderror
                            </div>
                            <div class="col-md-2">
                              <label for="inputOngkir" class="form-label"><h6>Ongkir</h6></label>
                              <input name="ongkir" type="text" class="form-control @error('status') is-invalid @enderror" id="inputOngkir" placeholder="Ex.8000" value="{{old('status',$pesanans->ongkir)}}">
                              @error('ongkir')
                                  <div class="invalid-feedback">{{$message}}</div>
                              @enderror
                            </div>
                            <div class="col-md-9">
                              <label for="inputKurir" class="form-label"><h6>Kurir</h6></label>
                                <select name="kurir" id="inputKurir" class="form-select">
                                  <option value="">- Pilih Kurir -</option>
                                  <option value="J&T" @if ($pesanans->kurir == 'J&T') selected @endif>J&T</option>
                                  <option value="JNE" @if ($pesanans->kurir == 'JNE') selected @endif>JNE</option>
                                  <option value="Sicepat" @if ($pesanans->kurir == 'Sicepat') selected @endif>Sicepat</option>
                                </select>
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