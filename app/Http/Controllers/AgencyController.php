<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Vehicle;
use App\Models\Reservation;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;

class AgencyController extends Controller
{

    public function getRendezvous(){

        $user = Auth::user();
        $dates= Reservation::where('agency_id',$user->id)->get();

     
        return  response()->json($dates, 200);

    }

    public function getAllVehicles($agency_id){

        $agency= Vehicle::where('agency_id',$agency_id)->get();

     
        return  response()->json($agency, 200);

    }


    public function updateWarning($agency_name){

        $agency= Agency::where('agency_name',$agency_name)->first();

        if($agency->status_warning == 0){
            $agency->update([
                'status_warning'=>true
            ]);
    
            $response = [
                'message' => 'status warning status changed to true!',
                'status_code' => 1,
            ];
           return response($response,200);
        }else{

            $response = [
                'message' => 'status has already been changed',
                'status_code' => 0
            ];
           return response($response,200);

        }
       
    }

    public function checkWarning($agency_name){

        $agency= Agency::where('agency_name',$agency_name)->first();

        if($agency->status_warning == 0){
    
            $response = [
                'message' => 'status warning status is false!',
                'status_code' => 0,
            ];
           return response($response,200);
        }else{

            $response = [
                'message' => 'status warning is true',
                'status_code' => 1
            ];
           return response($response,200);

        }
       
    }
}
