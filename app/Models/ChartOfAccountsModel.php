<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartOfAccountsModel extends Model
{
    protected $fillable = [
        'general_ledger_account_id',
        'account_group',
        'current_noncurrent',
        'major_account_group_id',
        'sub_major_account_group_id',

    ];
}
