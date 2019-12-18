@extends('layout.main')

@section('title','Rekap Transaksi')

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h1 class="panel-title">Download rekap transaksi</h1>
        </div>
        <div class="panel-body">
            <form action="{{ route('print.cetak') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="bulan">Bulan</label>
                    <input id="bulan" class="form-control" type="text" name="bulan">
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input id="tahun" class="form-control" type="text" name="tahun">
                </div>
                <button class="btn btn-primary" type="submit">Download</button>
            </form>
        </div>
    </div>
@endsection