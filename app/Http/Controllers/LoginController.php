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
        $receivedData = $token->validate([
          'user_phone' => 'required',
          'user_token' => 'required'
        ]);

        $user_phone = $receivedData['user_phone'];
        $user_token = $receivedData['user_token'];

        try {
          //code...
          $user_details = Customer::query()
          ->where('PhoneNo',$user_phone)
          //->where('password',$user_token)
          ->get();
          /*$posts = Post::query()
          ->where('is_published',true)
          ->orderBy('id','desc')
          ->get();*/
          $count = $user_details->count();
            if ($count >= 1) {
                  //echo($user_details[0]['NatID']);
                  if(($user_token == $user_details[0]['password'])&&($user_phone == $user_details[0]['PhoneNo'])){
                      echo($user_details);
                  }else{
                  $pre_loaded = array(
                  'id' => 'wrong00',
                  'NatID' => '00',
                  'firstname' => '00',
                  'lastname' => '00',
                  'email' => '00',
                  'PhoneNo' => '00',
                  'regDate' => '00',
                  'password' => '00'
                );
              
                $user_details = json_encode($pre_loaded);
                    echo($user_details);
                }
              } else {
                $pre_loaded = array(
                  'id' => 'wrong55',
                  'NatID' => '00',
                  'firstname' => '00',
                  'lastname' => '00',
                  'email' => '00',
                  'PhoneNo' => '00',
                  'regDate' => '00',
                  'password' => '00'
                );
              
                $user_details = json_encode($pre_loaded);
                    echo($user_details);
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
          $e->getMessage();
          echo($e);
        }
      }
}
