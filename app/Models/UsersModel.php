<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsersModel extends Model
{
    use HasFactory;

    protected $table='users';  
    protected $fillable=['ID_User','Username','Password'];  
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'ID_User';
}