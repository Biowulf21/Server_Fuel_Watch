<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyBranch extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'branch_name',
        'branch_address',
        'branch_coordinates',
    ];
}
