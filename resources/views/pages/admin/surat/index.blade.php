@extends('layout.admin')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Data Surat</h4>
            </div>
        </div>
    </div>
    <!-- row -->

    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    @if(Session::has('danger'))
    <div class="alert alert-danger">
        {{Session::get('danger')}}
    </div>
    @endif


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-success" href="surat/tambah">
                        <i class="icon-copy fa fa-plus" aria-hidden="true"></i>&nbsp;
                        Tambah data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Surat</th>
                                    <th>Nama Surat</th>
                                    <th>Pengirim Surat</th>
                                    <th>Ditujukan</th>
                                    <th>Jenis Surat</th>
                                    <th>Tanggal Surat</th>
                                    <th>File Surat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;?>
                                @foreach($pgw as $p)
                                <?php $no++ ;?>
                                <tr>
                                    <td class="text-dark">{{ $no }}</td>
                                    <td class="text-dark">{{ $p->Nomor_Surat }}</td>
                                    <td class="text-dark">{{ $p->Nama_Surat }}</td>
                                    <td class="text-dark">{{ $p->Pengirim_Surat }}</td>
                                    <td class="text-dark">{{ $p->Ditujukan }}</td>
                                    <td class="text-dark">{{ $p->Jenis_Surat	 }}</td>
                                    <td class="text-dark">{{ $p->Tanggal_Surat	 }}</td>
                                    <td><a href="@if($p->File_Surat)/admin/surat/downloadfile/{{$p->ID_Surat}}@else # @endif"
                                            class="text-primary">
                                            @if($p->File_Surat)
                                            {{$p->File_Surat}} &nbsp;&nbsp;
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-file-earmark-arrow-down-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </a>
                                        @else
                                        <span class="text-dark">File belum diupload</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="surat/edit/{{ $p->ID_Surat}}" data-toggle="tooltip"
                                            data-placement="top" title="Perbaharui" class="btn mb-1 btn-warning"
                                            type="button"><i class="fa fa-pencil color-muted m-r-5"></i></a>
                                        |
                                        <a href="surat/hapus/{{ $p->ID_Surat}}" class="delete btn mb-1 btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                            data-toggle="tooltip" data-placement="top" title="Hapus" type="button"><i
                                                class="fa fa-trash color-muted m-r-5"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Surat</th>
                                    <th>Nama Surat</th>
                                    <th>Pengirim Surat</th>
                                    <th>Ditujukan</th>
                                    <th>Jenis Surat</th>
                                    <th>Tanggal Surat</th>
                                    <th>File Surat</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#delete').click(function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        var message = $(this).data('confirm');
        if (!confirm(message)) {
            return false;
        }
        window.location = href;
    });
});
</script>

@endsection