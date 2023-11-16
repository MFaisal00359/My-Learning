<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function beasiswa(){
        return $this-> hasMany(beasiswa::class, 'author_id');
    }

    public function matpel(){
        return $this-> hasMany(mata_pelajaran::class, 'id_pengampu');
    }

    public function modul(){
        return $this-> hasMany(modul::class, 'author_id');
    }

    public function tes_kepribadian(){
        return $this-> hasMany(tes_kepribadian::class, 'author_id');
    }

    public function action_log(){
        return $this-> hasMany(action_log::class, 'author_id');
    }
}
