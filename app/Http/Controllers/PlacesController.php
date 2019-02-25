<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlacesRequest;
use App\Models\ActivityPlaces;
use App\Models\GalleryPlaces;
use App\Models\Places;
use App\Helpers\ApiResponse;
use App\Models\RecommendationPlaces;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function index(){
        try{
            $places=Places::all();
            foreach ($places as $place){
                $place->activities = ActivityPlaces::query()->where("place_id",$place->id)->get();
                $place->recommendations = RecommendationPlaces::query()->where("place_id",$place->id)->get();
                $place->gallery = GalleryPlaces::query()->where("place_id",$place->id)->get();
            }
            $response = new ApiResponse(200, "Success", $places);
        }
        catch (\Exception $e) {
            $response = new ApiResponse(500, "Error", [$e->getMessage()]);
        }
        return $response->response();
    }
    public function store(PlacesRequest $request)
    {
        $validated = $request->validated();
        if(! $validated){
            return response()->json(['success'=> false, 'error'=> $validated->messages()]);
        }
        else{
            $arrayPlaces =[
                'name'=> $request->name,
                'latitude'=> $request->latitude,
                'longitude'=> $request->longitude,
                'description'=> $request->description,
                'route'=> $request->route,
                'costs'=> $request->costs,
                'schedule'=> $request->schedule,
                'funfacts'=> $request->funfacts
            ];
            $place = Places::create($arrayPlaces);
            $arrayactivities=[];
            foreach ($request->activities as $activity){
                $arrayactivities.array_push($activity);
            }
            $place->activities=ActivityPlaces::create($arrayactivities);
            $arrayrecommendation=[];
            foreach ($request->recommendations as $recommendation){
                $arrayrecommendation.array_push($recommendation);
            }
            $place->recommendatios=RecommendationPlaces::create($arrayrecommendation);
            return response()->json(
                ['success' => true,
                    'data'=> $place], 200);
        }
    }
}
