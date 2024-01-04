<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'tb_absen'; 

    protected $fillable = [
        'id_siswa', 'tanggal_absen', 'kehadiran'
    ];

    public function siswa(): HasOne
    {
        return $this->hasOne(Siswa::class, 'id', 'id_siswa');
    }

    

}
