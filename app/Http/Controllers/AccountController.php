<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class AccountController extends Controller
{
    public function auth_user(Request $token)
      {
        $receivedData = $token->validate([
          '_fName' => 'required',
          '_lName' => 'required',
          '_eAddress' => 'required',
          '_natID' => 'required',
          '_pNumber' => 'required'
        ]);

        $updated_fName = $receivedData['_fName'];
        $updated_lName = $receivedData['_lName'];
        $updated_eAddress = $receivedData['_eAddress'];
        $natID = $receivedData['_natID'];
        $updated_pNumber = $receivedData['_pNumber'];

        try {
          //code...
          $updated_query = Customer::where('_natID', $updated_natID)
          ->update(['firstname' => $updated_fName])
          ->update(['lastname' => $updated_fName])
          ->update(['email' => $updated_eAddress])
          ->update(['PhoneNo' => $updated_pNumber]);


        } catch (Exception $e) {
          //throw $th;
          $e->getMessage();
          echo($e);
        }
      }
}
