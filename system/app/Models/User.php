<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\UserDetail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function detail(){
        return $this->hasOne(UserDetail::class, 'id_user');
    }

    function produk(){
        return $this->hasMany(Produk::class, 'id_user');
    }

    function getJenisKelaminStringAttribute(){
        return ($this->jenis_kelamin == 1) ? "Laki-laki" : "Perempuan";
    }

    function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}
