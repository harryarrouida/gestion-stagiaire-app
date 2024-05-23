<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Stagiaire extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'cin',
        'password',
        'filliere_id',
        'accepted'
    ];
}
