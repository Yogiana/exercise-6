<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elektronik extends Model
{
    use HasFactory;
    protected $table = 'elektroniks';
    protected $fillable = ['elektronik_type_id', 'nama_barang', 'qty', 'price'];

    public function elektronik_type()
    {
        return $this->belongsTo(elektronik_type::class, "elektronik_type_id");
    }
}
