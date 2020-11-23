<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllotmentClassModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'allotment_classes_of_expense';
    protected $fillable = [

        'allotment_id',
        'uacs_code',
        'allotment_class',
    ];
}
