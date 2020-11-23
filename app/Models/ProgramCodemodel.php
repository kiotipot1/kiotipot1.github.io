<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramCodemodel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'program_code';
    use HasFactory;
    protected $fillable = [

        'program_code_id',
        'program_code',
        'program_tittle'
    ];
}
