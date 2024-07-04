@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 col-lg-12">
            <div class="card card-round">
                <div class="card-header">
                    <div class="card-head-row">
                        <div align="left" class="mb-3">
                        </div>
                    </div>
                    <h1 class="text-center">EDIT BUKU</h1>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="min-height: 475px">
                        <div class="table-responsive">
                            <form class="justify-content-center" action="{{ route('buku.update', $edit->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label for="">Nama Buku</label>
                                    <input type="text" name="nama_buku" placeholder="Input your nama buku"
                                        class="form-control" value="{{ $edit->nama_buku }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Penerbit</label>
                                    <input type="text" name="penerbit" placeholder="Input your penerbit"
                                        class="form-control" value="{{ $edit->penerbit }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Quantity</label>
                                    <input type="number" name="qty" placeholder="Input your quantity"
                                        class="form-control" value="{{ $edit->qty }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Deskripsi</label>
                                    <input type="text" name="deskripsi" placeholder="Input your deskripsi"
                                        class="form-control" value="{{ $edit->deskripsi }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Penulis</label>
                                    <input type="text" name="penulis" placeholder="Input your penulis"
                                        class="form-control" value="{{ $edit->penulis }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Genre</label>
                                    <input type="text" name="genre" placeholder="Input your genre" class="form-control"
                                        value="{{ $edit->genre }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="submit" class="btn btn-primary" value="Simpan">
                                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
