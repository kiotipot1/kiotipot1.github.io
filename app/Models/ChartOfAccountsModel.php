<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartOfAccountsModel extends Model
{

    public $timestamps = false;
    protected $table = 'chart_of_accounts';
    protected $fillable = [
        'general_ledger_account_id',
        'account_group',
        'current_noncurrent',
        'major_account_group_id',
        'sub_major_account_group_id',
        'enable_disable'

    ];
    public function generalLedgerAccount()
    {
        return $this->belongsTo(GeneralLedgerAccountModel::class, 'general_ledger_account_id', 'id');
    }

    public function majorAccountGroup()
    {
        return $this->belongsTo(MajorAccountGroupModel::class, 'major_account_group_id', 'id');
    }
    public function subMajorAccountGroup()
    {
        return $this->belongsTo(SubMajorAccountGroupModel::class, 'sub_major_account_group_id', 'id');
    }
}
