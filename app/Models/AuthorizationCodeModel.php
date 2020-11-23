<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorizationCodeModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'authorization_code';
    protected $fillable = [

        'authorization_code',
        'description',    
        
    ];
}
