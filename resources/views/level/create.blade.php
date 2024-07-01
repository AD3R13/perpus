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
                    <h1 class="text-center">TAMBAH USERTYPE</h1>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="min-height: 475px">
                        <div class="table-responsive">
                            <form class="justify-content-center" action="{{ route('level.store') }}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="">Usertype</label>
                                    <input type="text" name="nama_level" placeholder="Input your usertype"
                                        class="form-control" required value="">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Keterangan</label>
                                    <textarea type="text" name="keterangan" class="form-control" value=""></textarea>
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
