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
          $current_user_details[0]['email'] = $updated_eAddress;
          $current_user_details[0]['PhoneNo'] = $updated_pNumber;

          $current_user_details[0]->save();

                $updated_details = Customer::query()
                ->where('PhoneNo', $updated_pNumber)
                ->get();

                echo($updated_details);

        } catch (Exception $e) {
          //throw $th;
          $e->getMessage();
          echo($e);
        }
      }

      public function update_password(Request $token)
      {
        $receivedData = $token->validate([
          '_password' => 'required',
          '_natID' => 'required'
        ]);

        $updated_password = $receivedData['_password'];
        $natID = $receivedData['_natID'];
       try {
          //code...
          $current_user_details = Customer::query()
          ->where('NatID', $natID)
          ->get();

          $current_user_details[0]['password'] = $updated_password;

          $current_user_details[0]->save();

                $updated_details = Customer::query()
                ->where('NatID', $natID)
                ->get();

                $pre_loaded = array(
                  'response' => "OK"
                );
              
                $final_response = json_encode($pre_loaded);
                echo("[".$final_response."]");

        } catch (Exception $e) {
          //throw $th;
          $e->getMessage();
          echo($e);
        }
      }

      public function sign_up(Request $token)
      {
        $receivedData = $token->validate([
          '_fName' => 'required',
          '_lName' => 'required',
          '_eAddress' => 'required',
          '_natID' => 'required',
          '_pNumber' => 'required',
          '_userPass' => 'required'
        ]);

        $_fName = $receivedData['_fName'];
        $_lName = $receivedData['_lName'];
        $_eAddress = $receivedData['_eAddress'];
        $_natID = $receivedData['_natID'];
        $_pNumber = $receivedData['_pNumber'];
        $_userPass = $receivedData['_userPass'];
        echo($_fName." ".date("Y-m-d H:i:s")." ".$_eAddress ." ".$_natID." ".$_pNumber." ".$_userPass);
       try {
          //code...
          $signup = new Customer;
          $signup->id = $_natID;
          $signup->NatID = $_natID;
          $signup->firstname = $_fName;
          $signup->lastname = $_lName;
          $signup->email = $_eAddress;
          $signup->PhoneNo = $_pNumber;
          $signup->regDate = date("Y-m-d H:i:s");
          $signup->password = $_userPass;
          $signup->save();

       // echo($signup);

               // echo($updated_details);

        } catch (Exception $e) {
          //throw $th;
          $e->getMessage();
          echo($e);
        }
      }
    }
