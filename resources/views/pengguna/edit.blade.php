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
                    <h1 class="text-center">EDIT PENGGUNA</h1>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="min-height: 475px">
                        <div class="table-responsive">
                            <form class="justify-content-center" action="{{ route('pengguna.update', $edit->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label for="">Nama</label>
                                    <input type="text" name="name" placeholder="Input your name" class="form-control"
                                        required value="{{ $edit->name }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Email</label>
                                    <input type="text" name="email" placeholder="Input your email" class="form-control"
                                        required value="{{ $edit->email }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Password</label>
                                    <input type="password" name="password" placeholder="********" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Re-Password</label>
                                    <input type="password" name="password" placeholder="********" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Usertype</label>
                                    <select class="form-control" name="id_level" id="id_level" class="form-select"
                                        aria-label="Default select example">
                                        <option selected>Choose a usertype</option>
                                        @foreach ($level as $du)
                                            <option value="{{ $du->id }}" required>{{ $du->nama_level }}</option>
                                        @endforeach
                                    </select>
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
