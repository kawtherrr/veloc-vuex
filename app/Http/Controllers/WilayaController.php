<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Wilaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WilayaController extends Controller
{
    public function allWilaya(){
        $wilaya = Wilaya::all();

        return $wilaya;
    }

    public function allCities($id){
        //$cities = City::where('wilaya_id',$id)->with('wilaya')->get();
        $cities = DB::table('cities')->join('wilayas','wilayas.id','=','cities.wilaya_id')
        ->where("wilaya_name", "=", $id)->select('cities.*')->get();


        return $cities;
    }
}
