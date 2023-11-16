<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_link';

    public function user(){
        return $this-> belongsTo(User::class, 'author_id');
    }
}
