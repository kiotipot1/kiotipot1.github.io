<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceSourceCodeModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'finance_source_codes';
    protected $fillable = [

        'finance_source_code',
        'description',    
        
    ];
}
