<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class LoginController extends Controller
{
  public $loggedInStatus = false;
  
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
          $count = $categories->count();
         if ($count >= 1) {
           $loggedInStatus = true;
            if($loggedInStatus){
              /*$db_response= array(
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
              echo($categories);
            }else{
              
            }

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
