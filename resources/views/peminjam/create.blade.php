@extends('layouts.app')
@section('title', 'TRANSACTION ADD')
@section('content')
    <div class="table-responsive">
        <div class="card-body">
            <div class="chart-container" style="min-height: 300px">
                <div class="form-group mb-3">
                    <form class="justify-content-center" action="" method="POST">
                        @csrf
                        <label for="">Nama Peminjam</label>
                        <div class="row">
                            <div class="col-md-3">
                                <select class="form-control" name="id_anggota">
                                    <option disable hidden value="">Choose a member</option>
                                    @foreach ($data as $d)
                                        <option value="{{ $d->id }}">{{ $d->nama_anggota }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div align="left" class="col-md-3">
                                <a href="{{ route('anggota.create') }}" class="btn btn-success btn-round"><i
                                        class="fas fa-plus"></i> Member</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">No. Transaksi</label>
                            <input type="text" readonly value="" class="form-control" name="no_transaksi">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Save">
                    <input type="reset" class="btn btn-danger" value="Cancel">
                    <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
