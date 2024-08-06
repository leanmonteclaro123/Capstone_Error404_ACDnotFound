<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class loginModel extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'loginmodels';
    protected $fillable = [

        'Type',
        'lastname',
        'firstname',
        'middle',
        'address',
        'city',
        'province',
        'postal_code',
        'username',
        'Role',
        'id_no',
        'campus',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
