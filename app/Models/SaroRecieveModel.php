<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaroRecieveModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'saro_recieved';
    use HasFactory;
    protected $fillable = [
        'id',
        'date_issued',
        'saro_no',
        'fund_source_code',
        'mfo_code',
        'particulars',
        'object_code',
        'amount'
    ];
}
