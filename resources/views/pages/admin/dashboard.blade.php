@extends('layout.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="stat-widget-two card-body">
                    <div class="stat-content">
                        <div class="stat-text">Total Data Surat</div>
                        <div class="stat-digit">{{$surat}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="stat-widget-two card-body">
                    <div class="stat-content">
                        <div class="stat-text">Total Data Surat Masuk</div>
                        <div class="stat-digit">{{$surat_masuk}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="stat-widget-two card-body">
                    <div class="stat-content">
                        <div class="stat-text">Total Data Surat Keluar</div>
                        <div class="stat-digit">{{$surat_keluar}}</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# column -->
    </div>
</div>
@endsection