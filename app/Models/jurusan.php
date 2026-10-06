<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusans';
    protected $tablefillable = [
        'kode_jurusan',
        'nama_jurusan',
        'keterangan',
        'status',
    ];
}
