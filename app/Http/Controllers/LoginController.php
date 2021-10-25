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
          $categories = Customer::query()
          ->where('PhoneNo',$id)
          ->get();
          /*$posts = Post::query()
          ->where('is_published',true)
          ->orderBy('id','desc')
          ->get();*/
          //$count = $categories->count();
          echo($categories);
          echo($count);
        } catch (Exception $e) {
          //throw $th;
          $e->getMessage();
          echo($e);
        }
      }
}
