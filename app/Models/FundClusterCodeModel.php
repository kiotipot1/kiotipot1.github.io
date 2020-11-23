<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundClusterCodeModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'fund_cluster_code';
    protected $fillable = [

        'fund_cluster_code',
        'description',    
        
    ];
}
