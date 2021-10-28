<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class LoginController extends Controller
{
  public $loggedInStatus = false;
  public $user_phone;
  public $user_token;
  
    public function auth_user(Request $token)
      {
        $receivedData = $request->validate([
          'user_phone' => 'required',
          'user_token' => 'required'
        ]);

        $user_phone = $receivedData['user_phone'];
        $user_token = $receivedData['user_token'];

        try {
          //code...
          $user_details = Customer::query()
          ->where('PhoneNo',$user_phone)
          ->where('password',$user_token)
          ->get();
          /*$posts = Post::query()
          ->where('is_published',true)
          ->orderBy('id','desc')
          ->get();*/
          $count = $user_details->count();
         if ($count >= 1) {
              echo($user_details);
          } else {
            echo("Records non-existent");

          }
         
          //echo($count);
          /*$curl_post_data = array(
            //Fill in the request parameters with valid values
            'InitiatorName' => $InitiatorName,
            'SecurityCredential' => $SecurityCredential,
            'CommandID' => $CommandID,
            'Amount' => $Amount,
            'PartyA' => $PartyA,
            'PartyB' => $PartyB,
            'Remarks' => $Remarks,
            'QueueTimeOutURL' => $QueueTimeOutURL,
            'ResultURL' => $ResultURL,
            'Occasion' => $Occasion
          );
        
          $data_string = json_encode($curl_post_data);*/
        } catch (Exception $e) {
          //throw $th;
          $e->getMessage();
          echo($e);
        }
      }
}
