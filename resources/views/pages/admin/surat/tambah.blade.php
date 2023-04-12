@extends('layout.admin')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Form Tambah Data Surat</h4>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-body">
                    <div class="basic-form custom_file_input">
                        <form action="/admin/surat/store" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Nomor Surat</label>
                                    <input type="text" class="form-control" name="nomor_surat" required>
                                </div>
                                <div class="col form-group">
                                    <label>Nama Surat</label>
                                    <input type="text" class="form-control" name="nama_surat" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Pengirim Surat</label>
                                    <input type="text" class="form-control" name="pengirim_surat" required>
                                </div>
                                <div class="col form-group">
                                    <label>Ditujukan Ke Pada</label>
                                    <input type="text" class="form-control" name="ditujukan" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Jenis Surat</label>
                                    <select class="form-control" required name="jenis_surat">
                                        <option value="">Pilih Data</option>
                                        <option value="Surat Masuk">Surat Masuk</option>
                                        <option value="Surat Keluar">Surat Keluar</option>
                                    </select>
                                </div>
                                <div class="col form-group">
                                    <label>Tanggal Surat</label>
                                    <input name="tanggal_surat" class="datepicker-default form-control" id="datepicker"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>File Surat</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection