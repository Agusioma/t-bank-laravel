<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Savings extends Model
{
    protected $table = 'savings';
    public $timestamps = false;
    protected $primaryKey = 'NatID';
    protected $filled = ['customerID',
                            'currYear',
                            'january',
                            'february',
                            'march',
                            'april',
                            'may',
                            'june',
                            'july',
                            'august',
                            'september',
                            'october',
                            'november',
                            'december'
                        ];
}
