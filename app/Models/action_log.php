<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class action_log extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_log';

    public function user(){
        return $this-> belongsTo(User::class, 'author_id');
    }
}
