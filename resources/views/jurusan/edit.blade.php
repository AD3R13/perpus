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
                    <h1 class="text-center">EDIT JURUSAN</h1>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="min-height: 475px">
                        <div class="table-responsive">
                            <form class="justify-content-center" action="{{ route('jurusan.update', $edit->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label for="">Jurusan</label>
                                    <input type="text" name="nama_jurusan" value="{{ $edit->nama_jurusan }}"
                                        class="form-control" value="" required>
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
