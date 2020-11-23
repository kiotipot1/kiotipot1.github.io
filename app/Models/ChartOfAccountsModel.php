<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartOfAccountsModel extends Model
{
    
    public $timestamps = false;
    protected $table = 'chart_of_accounts';
    protected $fillable = [
        'general_ledger_account_name',
        'account_group',
        'current_noncurrent',
        'major_account_group_name',
        'sub_major_account_group_name',

    ];
}
