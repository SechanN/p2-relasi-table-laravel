<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoTelepon extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'no_telepon', 'nama_pengguna'];


    public function nama_pengguna()
    {
        return $this->belongsTo(User::class);
    }

}
