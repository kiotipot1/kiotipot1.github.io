<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajorAccountGroupModel extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'major_account_group';
    protected $fillable = [
        'major_account_name',
    ];
    
    public function chartOfAccount()
    {
        return $this->hasMany(ChartOfAccountsModel::class,'major_account_group_id','id');
    }

}
