@extends('layouts.app')
@section('title', 'TRANSACTION ADD')
@section('content')
    <form class="justify-content-center" action="{{ route('peminjam.store') }}" method="POST">
        @csrf
        <div class="table-responsive">
            <div class="card-body">
                <div class="chart-container" style="min-height: 300px">
                    <div class="form-group mb-3">
                        @csrf
                        <label for="">Member name</label>
                        <div class="row">
                            <div class="col-md-3">
                                <select class="form-control" name="id_anggota" required>
                                    <option>Choose a member</option>
                                    @foreach ($data as $d)
                                        <option value="{{ $d->id }}">{{ $d->nama_anggota }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div align="left" class="col-md-3">
                                <a href="{{ route('anggota.create') }}" class="btn btn-success btn-sm btn-round"><i
                                        class="fas fa-plus"></i><b> New Member</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">No. Transaction</label>
                                <input type="text" readonly value="{{ $kode_transaksi }}" class="form-control"
                                    name="no_transaksi">
                            </div>
                        </div>
                        <div class="table-transaction">
                            <div align="right" class="mb-3">
                                <button type="button" class="btn btn-success btn-sm btn-add"><i class="fas fa-plus">
                                        Add</i></button>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Book Name</th>
                                        <th>Loan of Date</th>
                                        <th>Loan of Return</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary" value="Save">
                        <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
                        <input type="reset" class="btn btn-danger" value="Cancel">
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
