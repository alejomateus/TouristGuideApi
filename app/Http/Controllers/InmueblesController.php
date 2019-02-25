<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Requests\InmueblesRequest;
use App\Models\Cities;
use App\Models\Inmuebles;
use Illuminate\Http\Requests;

class InmueblesController extends Controller
{
    public function index(){
        try{
            $inmuebles=Inmuebles::all();
            foreach ($inmuebles as $inmueble){
                $inmueble->city;
            }
            $response = new ApiResponse(200, "Success", $inmuebles);
        }
        catch (\Exception $e) {
            $response = new ApiResponse(500, "Error", [$e->getMessage()]);
        }
        return $response->response();
    }
    public function store(InmueblesRequest $request)
    {
        $validated = $request->validated();
        if(! $validated){
            return response()->json(['success'=> false, 'error'=> $validated->messages()]);
        }
        else{
            $array_inmuebles =[
                'address'=> $request->address,
                'type_transaction'=> $request->type_transaction,
                'bedrooms'=> $request->bedrooms,
                'bathrooms'=> $request->bathrooms,
                'parking_lots'=> $request->parking_lots,
                'antiquity'=> $request->antiquity,
                'area'=> $request->area,
                'active'=> $request->active,
                'id_city'=> $request->id_city
            ];
            $inmueble = Inmuebles::create($array_inmuebles);
            return response()->json(
                ['success' => true,
                'data'=> $inmueble], 200);
        }
    }
    public function destroy($id){
        Inmuebles::destroy($id);
    }
    public function show($id){
        try{
            $inmueble=Inmuebles::find($id);
            $inmueble->city= $inmueble->city;

            $response = new ApiResponse(200, "Success", $inmueble);
        }
        catch (\Exception $e) {
            $response = new ApiResponse(500, "Error", [$e->getMessage()]);
        }
        return $response->response();
    }
    public function update($id,InmueblesRequest $request){
        try{
            $inmueble=Inmuebles::find($id);
            $validated = $request->validated();
            if(! $validated){
                return response()->json(['success'=> false, 'error'=> $validated->messages()]);
            }
            else{
                $inmueble->address=$request->address;
                $inmueble->type_transaction=$request->type_transaction;
                $inmueble->bedrooms=$request->bedrooms;
                $inmueble->bathrooms=$request->bathrooms;
                $inmueble->parking_lots=$request->parking_lots;
                $inmueble->antiquity=$request->antiquity;
                $inmueble->area=$request->area;
                $inmueble->active=$request->active;
                $inmueble->id_city=$request->id_city;
                $inmueble->save();
                return response()->json(
                    [
                        'success' => true,
                        'data'=> $inmueble
                    ], 200);
            }
        }
        catch (\Exception $e) {
            $response = new ApiResponse(500, "Error", [$e->getMessage()]);
        }
        return $response->response();
    }
}
