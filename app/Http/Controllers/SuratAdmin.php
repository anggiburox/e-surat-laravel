<?php

namespace App\Http\Controllers;

use App\Models\SuratModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SuratAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // mengambil data dari table surat
        $pgw = DB::table('surat')->get();
    	// mengirim data surat ke view index
        return view('pages/admin/surat/index',['pgw' => $pgw]);
    }
    public function downloadfile($id)
    {
		// Ambil data materi dari database
        $data = SuratModel::fetchfile($id);
        
		// Generate path file
		$path = public_path() . '/assets/file/' . $data['File_Surat'];

		// Cek apakah file materi ada atau tidak
		if (!File::exists($path)) {
			// Jika file materi tidak ada, redirect ke halaman error
			return redirect()->route('error');
		}

		// Download file materi
		return response()->download($path);
    }

    public function tambah(){
        return view('pages/admin/surat/tambah');
    }

    public function store(Request $request){
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $nama_file = $file->getClientOriginalName();
            
            //pindahkan file kedalam folder doc
            $tujuanfile = 'assets/file';
            $file->move($tujuanfile,$nama_file);
        } else {
            $nama_file = null;
        }
	// insert data ke table surat
	DB::table('surat')->insert([
		'Nomor_Surat' => $request->nomor_surat,
        'Nama_Surat' => $request->nama_surat,
        'Pengirim_Surat' => $request->pengirim_surat,
        'Ditujukan' => $request->ditujukan,
        'Jenis_Surat' => $request->jenis_surat,
        'Tanggal_Surat' => $request->tanggal_surat,
        'File_Surat' => $nama_file
	]);
	// alihkan halaman ke halaman surat
	return redirect('/admin/surat/')->withSuccess('Data berhasil disimpan');
    }

    public function edit($id)
	{
		// mengambil data surat berdasarkan id yang dipilih
		$pgw = DB::table('surat')->where('ID_surat',$id)->get();
		// passing data surat yang didapat ke view edit.blade.php
		return view('pages/admin/surat/edit',['pgw' => $pgw]);
	}

	// update data surat
	public function update(Request $request){
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $nama_file = $file->getClientOriginalName();
            
            //pindahkan file kedalam folder doc
            $tujuanfile = 'assets/file';
            $file->move($tujuanfile,$nama_file);
        } else {
            $nama_file = null;
        }
		// update data surat
		DB::table('surat')->where('ID_Surat',$request->id_surat)->update([
            'Nomor_Surat' => $request->nomor_surat,
            'Nama_Surat' => $request->nama_surat,
            'Pengirim_Surat' => $request->pengirim_surat,
            'Ditujukan' => $request->ditujukan,
            'Jenis_Surat' => $request->jenis_surat,
            'Tanggal_Surat' => $request->tanggal_surat,
            'File_Surat' => $nama_file
		]);
		// alihkan halaman ke halaman surat
		return redirect('/admin/surat')->withSuccess('Data berhasil diperbaharui');
	}

	// method untuk hapus data surat
	public function hapus($id){
		// menghapus data surat berdasarkan id yang dipilih
		DB::table('surat')->where('ID_surat',$id)->delete();
		
		// alihkan halaman ke halaman surat
		return redirect('/admin/surat')->withDanger('Data berhasil dihapus');
	}
}