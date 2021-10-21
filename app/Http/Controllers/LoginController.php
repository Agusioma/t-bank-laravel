<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Customer;

class LoginController extends Controller
{
    public function show($id)
      {
        $tests = Customer::where('PhoneNo', $id)
        ->get();

        return $tests->toJson();
      }
}
