<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa_links extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_beasiswa',
        'link',
    ];
}
