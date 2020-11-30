<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralLedgerAccountModel extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'general_ledger_account';
    protected $fillable = [
        'general_ledger_account_name',
    ];
    
    public function chartOfAccount(){
        return $this->hasMany(ChartOfAccountsModel::class,'general_ledger_account_id','id');
    }    
}
