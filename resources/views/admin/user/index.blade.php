@extends('layout.main')

@section('judul','Halaman User')

@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Data User</h3>
        <div class="right">
            <a href="{{ route('user.tambah') }}" class="label label-primary">Tambah</a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->email }}</td>
                    <td>
                        <a href="" class="label label-warning">Edit</a>
                        <a href="" class="label label-info">Detail</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection