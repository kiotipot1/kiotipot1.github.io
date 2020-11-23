<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundCategoryModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'fund_category_classification_code';
    protected $fillable = [

        'fund_category_id',
        'description',
        'fund_category_code',
        'nsac'

    ];
}
