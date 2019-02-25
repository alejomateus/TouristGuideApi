<?php

namespace App\Http\Controllers;
use App\Helpers\ApiResponse;
use App\Models\Cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index(Request $request){
        try{
            $keyword = $request->keyword;
            if($keyword == null || $keyword == "")
                $cities =[];
            else
            $cities=Cities::query()->where("name","like","%".$keyword."%")->get();

            $response = new ApiResponse(200, "Success", $cities);
        }
        catch (\Exception $e) {
            $response = new ApiResponse(500, "Error", [$e->getMessage()]);
        }
        return $response->response();
    }
}
