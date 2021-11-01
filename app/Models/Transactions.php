<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = 'transactions';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $filled = ['customerID',
                            'transID',
                            'transType',
                            'amount',
                            'transDate'
                        ];
}
