<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa_link extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_beasiswa',
        'foto_beasiswa',
        'link_beasiswa',
    ];
}
