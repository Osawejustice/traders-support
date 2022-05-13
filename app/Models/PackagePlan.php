<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagePlan extends Model
{
    use HasFactory;
    protected $fillable = ['target', 'amount', 'note', 'package_id'];
}
