<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mata_pelajaran extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_matpel';

    public function user(){
        return $this-> belongsTo(User::class, 'id_pengampu', 'id_matpel');
    }
}
