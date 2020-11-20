<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralLedgerAccountModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'general_ledger_account_name',
    ];
    
}
