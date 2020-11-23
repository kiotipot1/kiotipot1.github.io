<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemittanceModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'remittance';
    use HasFactory;
    protected $fillable = [
        'id',
        'description',
        'payee_id',
        'payee_name'
    ];
}
