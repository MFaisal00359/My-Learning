<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul_12 extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_modul_12',
        'foto_modul_12',
        'link_modul_12',
    ];

    public $timestamps = true;
}
