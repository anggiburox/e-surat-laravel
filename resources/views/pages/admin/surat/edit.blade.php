@extends('layout.admin')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Form Perbaharui Data Surat</h4>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-body">
                    <div class="basic-form custom_file_input">
                        @foreach($pgw as $p)
                        <form action="/admin/surat/update" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" class="form-control" name="id_surat" value="{{$p->ID_Surat}}">
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Nomor Surat</label>
                                    <input type="text" class="form-control" name="nomor_surat"
                                        value="{{$p->Nomor_Surat}}" required>
                                </div>
                                <div class="col form-group">
                                    <label>Nama Surat</label>
                                    <input type="text" class="form-control" name="nama_surat" value="{{$p->Nama_Surat}}"
                                        required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Pengirim Surat</label>
                                    <input type="text" class="form-control" name="pengirim_surat"
                                        value="{{$p->Pengirim_Surat}}" required>
                                </div>
                                <div class="col form-group">
                                    <label>Ditujukan Ke Pada</label>
                                    <input type="text" class="form-control" name="ditujukan" value="{{$p->Ditujukan}}"
                                        required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Jenis Surat</label>
                                    <select class="form-control" required name="jenis_surat">
                                        <option value="">Pilih Data</option>
                                        <option value="Surat Masuk"
                                            {{ $p->Jenis_Surat == 'Surat Masuk' ? 'selected' : '' }}>Surat Masuk
                                        </option>
                                        <option value="Surat Keluar"
                                            {{ $p->Jenis_Surat == 'Surat Keluar' ? 'selected' : '' }}>Surat Keluar
                                        </option>
                                    </select>
                                </div>
                                <div class="col form-group">
                                    <label>Tanggal Surat</label>
                                    <input name="tanggal_surat" class="datepicker-default form-control"
                                        value="{{$p->Tanggal_Surat}}" id="datepicker" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>File Surat</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                            <a href="/admin/surat" class="btn btn-warning">Kembali</a>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection