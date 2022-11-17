<?php

namespace App\Models;

use App\Models\Elektronik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class elektronik_type extends Model
{
    use HasFactory;
    protected $table = "elektronik_types";
    protected $fillable = ["nama_type", "description"];

    public function Elektronik()
    {
        return $this->hasMany(Elektronik::class, "elektronik_type_id", "id");
    }
}
