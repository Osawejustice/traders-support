<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundedAccount extends Model
{
    use HasFactory;

    public const accounts = [
        [
            'name' => 'SYNTHETIC FUNDED ACCOUNTS',
            'type' => 'synthetic',
            'subscriptions' => [
                '250' => 25,
                '500' => 50,
                '1000' => 100,
                '2500' => 250,
                '5000' => 500,
                '10000' => 1000,
                '25000' => 2500,
                '50000' => 5000
            ]
        ],
        [
            'name' => 'FOREX FUNDED ACCOUNTS',
            'type' => 'forex',
            'subscriptions' => [
                '5000' => 75,
                '10000' => 99,
                '25000' => 200,
                '50000' => 350,
                '100000' => 500,
                '200000' => 950,
                '250000' => 1100
            ]
        ],
    ];
}
