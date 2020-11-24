<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundSourceModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'fund_source';
    protected $fillable = [

        
        'fund_source',
        'fund_source_description'

    ];
}
