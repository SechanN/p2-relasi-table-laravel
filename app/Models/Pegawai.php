<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawais';

    protected $fillable = ['id', 'nama', 'jabatan_id', 'alamat', 'tgl_lahir', 'no_telepon'];


    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function no_telepon()
    {
        return $this->hasOne(NoTelepon::class);
    }
    
}
