<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $filled = ['id','NatID','firstname','lastname','email','PhoneNo','regDate','password'];
}
