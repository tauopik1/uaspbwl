<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'tb_siswa'; 

    protected $fillable = [
        'id_kelas', 'nama_siswa', 'tanggal_lahir'
    ];

    public function kelas(): HasOne
    {
        return $this->hasOne(Kelas::class, 'id', 'id_kelas');
    }
}
