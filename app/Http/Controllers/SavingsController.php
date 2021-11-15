<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Savings;

class SavingsController extends Controller
{
    public function view_savings($acc_id){
        try {
            //code...
            $user_savings = Savings::query()
            ->where('customerID',$acc_id)
            ->get();

            $count = $user_savings->count();
                if ($count >= 1) {
                echo($user_savings);
                  }else{
                    $pre_loaded = array(
                        'id' => 'null00',
                        'customerID' => '00',
                        'currYear' => '00',
                        'january' => '00',
                        'february' => '00',
                        'march' => '00',
                        'april' => '00',
                        'may' => '00',
                        'june' => '00',
                        'july' => '00',
                        'august' => '00',
                        'september' => '00',
                        'october' => '00',
                        'november' => '00',
                        'december' => '00'
                      );
                    
                      $user_savings = json_encode($pre_loaded);
                      echo("[".$user_savings."]");
                  }
          } catch (Exception $e) {
            $e->getMessage();
            echo($e);
          }
    }

    public function total_savings($acc_id){
      $total_savings  = 0;
      try {
          //code...
          $user_savings = Savings::query()
          ->where('customerID',$acc_id)
          ->get();

          $count = $user_savings->count();
              if ($count >= 1) {
              foreach ($user_savings as $user_saving) {
                  $total_savings = $user_saving->january + $user_saving->february + $user_saving->march + $user_saving->april + $user_saving->may + $user_saving->june + $user_saving->july + $user_saving->august + $user_saving->september + $user_saving->october + $user_saving->november + $user_saving->december ;
              }
              $pre_loaded = array(
                'totals' => number_format($total_savings,2)
              );
            
              $user_savings = json_encode($pre_loaded);
              echo("[".$user_savings."]");
                }else{
                  $pre_loaded = array(
                      'totals' => number_format(0,2)
                    );
                  
                    $user_savings = json_encode($pre_loaded);
                    echo("[".$user_savings."]");
                }
        } catch (Exception $e) {
          $e->getMessage();
          echo($e);
        }
  }

}
