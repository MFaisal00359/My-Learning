<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_modul',
        'deskripsi_modul',
        'file_modul',
    ];

    public $timestamps = true;
}
