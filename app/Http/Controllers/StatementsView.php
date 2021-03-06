<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;

class StatementsView extends Controller
{
    public function loadStatements(Request $token){
        try {
            //code...
            $receivedData = $token->validate([
              'user_id' => 'required'
            ]);
    
            $acc_id = $receivedData['user_id'];

            $user_statements = Transactions::query()
            ->where('customerID',$acc_id)
            ->get();
            $count = $user_statements->count();
                if ($count >= 1) {
                /*foreach ($user_statements as $user_statement) {
                    $total_savings = $total_savings + $user_statement->amount;

                }*/
                
                echo($user_statements);
                //echo($user_statements);
                  }else{
                    $pre_loaded = array(
                        'id' => '00',
                        'customerID' => '00',
                        'transID' => '00',
                        'transType' => '00',
                        'amount' => '00',
                        'transDate' => '00'
                      );

                      $user_statements = json_encode($pre_loaded);
                      echo("[".$user_statements."]");
                  }
          } catch (Exception $e) {
            $e->getMessage();
            echo($e);
          }
    }
    public function statPreview(Request $token){
      try {
          //code...
          $receivedData = $token->validate([
            'user_id' => 'required'
          ]);
  
          $acc_id = $receivedData['user_id'];
          $user_statements = Transactions::query()
          ->where('customerID',$acc_id)
          ->orderBy('id', 'desc')
          ->take(3)
          ->get();
          $count = $user_statements->count();
              if ($count >= 1) {
              /*foreach ($user_statements as $user_statement) {
                  $total_savings = $total_savings + $user_statement->amount;

              }*/
              echo($user_statements);
              //echo($user_statements);
                }else{
                  $pre_loaded = array(
                      'id' => '00',
                      'customerID' => '00',
                      'transID' => '00',
                      'transType' => '00',
                      'amount' => '00',
                      'transDate' => '00'
                    );

                    $user_statements = json_encode($pre_loaded);
                    echo("[".$user_statements."]");
                }
        } catch (Exception $e) {
          $e->getMessage();
          echo($e);
        }
  }
}
