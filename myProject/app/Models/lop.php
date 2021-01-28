<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class lop extends Model
{
    use HasFactory;
    protected $table = 'lop';

    public static function getAll(){
        $result = DB::table('lop')
        ->select('idLop','malop','Mahocphan','Tenhocphan','Loaihinh','HeDT','lop','lichhoc','Giangvien','ky')
        ->get()->toArray();
        return $result;
    } 
}
