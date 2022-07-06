<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatans';

    protected $fillable = ['id', 'jabatan'];

    // public function pegawai()
    // {
    //     return $this->hasMany(Pegawai::class);
    // }
}
