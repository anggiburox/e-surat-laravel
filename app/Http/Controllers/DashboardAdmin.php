<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SuratModel;
use Illuminate\Support\Facades\DB;

class DashboardAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */    
    public function index()
    {   
        $suratall = SuratModel::all();
        $surat = SuratModel::count();
        $surat_masuk = SuratModel::where('Jenis_Surat', 'Surat Masuk')->count();
        $surat_keluar = SuratModel::where('Jenis_Surat', 'Surat Keluar')->count();


        return view('pages/admin/dashboard', ['surat'=>$surat, 'suratall'=>$suratall, 'surat_keluar'=>$surat_keluar, 'surat_masuk'=>$surat_masuk]);
    }
}