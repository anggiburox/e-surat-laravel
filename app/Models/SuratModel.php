<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SuratModel extends Model
{
    use HasFactory;

    protected $table='surat';  
    protected $fillable=['ID_Surat','Nomor_Surat','Nama_Surat','Pengirim_Surat','Ditujukan','Jenis_Surat','Tanggal_Surat','File_Surat'];  
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'ID_Surat';

    public static function fetchfile($id = null){
        // Ambil data materi berdasarkan ID
        return SuratModel::where('ID_Surat', $id)->first();
        }
}