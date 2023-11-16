<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modul extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_modul';

    public function user(){
        return $this-> belongsTo(User::class, 'author_id');
    }

    public function matpel(){
        return $this-> belongsTo(mata_pelajaran::class, 'id_matpel');
    }
}
