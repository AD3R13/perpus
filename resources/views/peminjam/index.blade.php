@extends('layouts.app')
@section('title', 'TRANSACTION DATA')
@section('content')
    @csrf
    <div class="table-responsive">
        <div align="left" class="mb-3">
            <a href="{{ route('peminjam.create') }}" class="btn btn-success btn-round"><i class="fas fa-plus"></i> Add</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Member Name</th>
                    <th>No Transaction</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->anggota->nama_anggota }}</td>
                        <td>{{ $user->no_transaksi }}</td>
                        <td>
                            <a href="{{ route('peminjam.edit', $user->id) }}" class="btn btn-xs bg-primary">
                                <i class="fas fa-edit"> Edit</i>
                            </a>
                            <form action="{{ route('peminjam.destroy', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-xs btn-danger show_confirm" type="submit">
                                    <i class="fas fa-trash"> Delete</i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="myChartLegend"></div>
@endsection
