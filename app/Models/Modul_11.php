<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul_11 extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_modul_11',
        'foto_modul_11',
        'link_modul_11',
    ];

    public $timestamps = true;
}
