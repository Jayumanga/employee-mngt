<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employee_tbl';
    protected $primarykey = 'id';
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'DOB',
    ];
    use HasFactory;
}
