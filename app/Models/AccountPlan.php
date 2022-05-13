<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountPlan extends Model
{
    use HasFactory;
    protected $fillable =  [
        'account_type',
        'target_amount',
        'amount',
        'paid',
        'user_id',
        'reference'
    ];
    public function package()
    {
        return $this->belongsTo(Package::class, 'account_type', 'slug');
    }
}
