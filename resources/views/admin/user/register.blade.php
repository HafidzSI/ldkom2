@extends('layout.main')

@section('judul','Tambah User')

@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Form user</h3>
    </div>
    <div class="panel-body">
        <form action="{{ route('user.simpan') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="control-label" for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email" placeholder="name@yahoo.com">
            </div>
            <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <label class="control-label" for="first_name">Nama depan</label>
                <input class="form-control warna" type="text" name="first_name" id="first_name" placeholder="Nama depan">
            </div>
            <div class="form-group">
                <label class="control-label" for="last_name">Nama belakang</label>
                <input class="form-control hitam" type="text" name="last_name" id="last_name" placeholder="Nama belakang">
            </div>
            <button type="submit" class="btn btn-success btn-md pull-right">Simpan</button>
        </form>
    </div>    
</div>
@endsection