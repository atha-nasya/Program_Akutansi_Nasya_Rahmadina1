<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akuntansitransaksi_model extends Model
{
    use HasFactory;
    protected $table ="nasyatbl_akuntansi_transaksi";
    protected $primaryKey ="id";

    public function tampil_akuntansitransaksi(){
        $query = \DB::table('nasyatbl_akuntansi_transaksi')->get();
        return $query;
    }
}
