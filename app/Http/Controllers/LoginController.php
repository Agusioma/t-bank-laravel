<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class LoginController extends Controller
{
    public function show($id)
      {
        try {
          //code...
          $categories = Customer::all();
          echo($categories);
        } catch (Exception $e) {
          //throw $th;
          $e->getMessage();
          echo($e);
        }
      }
}
