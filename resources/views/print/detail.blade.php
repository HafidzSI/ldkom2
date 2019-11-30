@extends('layout.main')

@section('title','Detail transaksi')

@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Detail transaksi print</h3>
    </div>
    <div class="panel-body">
    <div class="custom-tabs-line tabs-line-bottom left-aligned">
        <ul class="nav" role="tablist">
            <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">{{ $detail_trans->nama }}</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="tab-bottom-left1">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled activity-timeline">
                        <li>
                            <i class="fa fa-plus activity-icon"></i>
                            <p>{{ $detail_trans->warna }} lembar print warna</p>
                        </li>
                        <li>
                            <i class="fa fa-plus activity-icon"></i>
                            <p>{{ $detail_trans->hitam_putih }} lembar print hitam putih</p>
                        </li>
                        <li>
                            <i class="fa fa-shopping-cart activity-icon"></i>
                            <p>{{ $detail_trans->total }}</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled activity-timeline">
                        <li>
                            <i class="fa fa-check activity-icon"></i>
                            <p>{{ $detail_trans->keterangan }}</p>
                        </li>
                        <li>
                            <i class="fa fa-calendar activity-icon"></i>
                            <p>{{ $detail_trans->tanggal }}</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="margin-top-30 text-center"><a href="{{ route('print.index') }}" class="btn btn-default">Kembali</a></div>
        </div>
    </div>
    </div>
</div>
@endsection