<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getProvinces(){
        return Province::all();
    }

    public function getRegencies(string $id){
        return Regency::where('province_id', $id)->get();
    }

    public function getDistricts(string $id){
        return District::where('regency_id', $id)->get();
    }

    public function getVillages(string $id){
        return Village::where('district_id', $id)->get();
    }
}
