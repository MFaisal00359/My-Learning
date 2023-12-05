<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konseling_link extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_tes',
        'link_tes',
    ];

    public $timestamps = true;
}
