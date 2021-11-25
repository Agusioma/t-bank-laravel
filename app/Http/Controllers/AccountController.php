<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class AccountController extends Controller
{
    public function update_details(Request $token)
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
          $current_user_details = Customer::query()
          ->where('NatID', $natID)
          ->get();

          $current_user_details[0]['firstname'] = $updated_fName;
          $current_user_details[0]['lastname'] = $updated_lName;
          $current_user_details[0]['email'] = $updated_fName;
          $current_user_details[0]['firstname'] = $updated_fName;
          $current_user_details[0]['firstname'] = $updated_fName;

          $current_user_details[0]->save();
      // $updated_query = Customer::where('_natID', $updated_natID)
                            //->update(['firstname' => $updated_fName]);
          //->update(['lastname' => $updated_fName])
          //->update(['email' => $updated_eAddress])
          //->update(['PhoneNo' => $updated_pNumber]);
            //if($updated_query){
               /* $updated_details = Customer::query()
                ->where('PhoneNo', $updated_pNumber)
                ->get();

                echo($user_details);*/
              //  echo("yooo");
            //}else{
                //echo("yeee");
           // }

        } catch (Exception $e) {
          //throw $th;
          $e->getMessage();
          echo($e);
        }
      }
}
