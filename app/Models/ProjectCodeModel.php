<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCodeModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'mfo_project_code';
    use HasFactory;
    protected $fillable = [
        'id',
        'mfo_id',
        'mfo_code',
        'mfo_shortname',
        'mfo_description'
    ];
}
