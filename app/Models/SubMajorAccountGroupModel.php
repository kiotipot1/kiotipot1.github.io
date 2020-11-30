<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMajorAccountGroupModel extends Model
{
    
    public $timestamps = false;
    protected $table = 'sub_major_account_group';
    use HasFactory;
    protected $fillable = [
        'sub_major_account_group_name',
    ];

    public function chartOfAccount()
    {
        return $this->hasMany(ChartOfAccountsModel::class,'sub_major_account_group_id','id');
    }
}
