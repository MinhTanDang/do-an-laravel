<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoiCredit;

class GoiCreditControllerAPI extends Controller
{
    public function getAll(){
        $goiCredits = GoiCredit::all();
        if($goiCredits->count() > 0){
            $result = [
                'success' => true,
                'goi_credit_list' => $goiCredits
            ];
        }
        else{
            $result = [
                'success' => false,
                'goi_credit_list' => null
            ];
        }
        return json_encode($result);
    }
    
    public function getElementById($id){
        $goiCredit = GoiCredit::find($id);
        if($goiCredit != null){
            $result = [
                'success' => true,
                'goi_credit' => $goiCredit
            ];
        }
        else{
            $result = [
                'success' => false,
                'goi_credit_list' => null
            ];
        }
        return json_encode($result);
    }
}
