<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Validator;

class ServiceApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        if($service->count() > 0){

            return response()->json([
                'status'=>200,
                'data'=>$service
            ],200);
        }else{
            return response()->json([
                'status'=>404,
                'data'=>"No Record found"
            ],404); 
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            's_name' => 'required|string',
            // 's_image' => 'required|string',
            's_description' => 'required|string',
            's_feature' => 'required|string',
            // 'f_logo' => 'required|string',
            'f_description' => 'required|string',
      
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {
            $service = Service::create([
                's_name' => $request->s_name,
                // 's_image' => $request->s_image,
                's_description' => $request->s_description,
                's_feature' => $request->s_feature,
                // 'f_logo' => $request->f_logo,
                'f_description' => $request->f_description,

            ]);
    
            if ($service) {
                return response()->json([
                    'status' => 200,
                    'message' => "Service Added Successfully"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to add Service"
                ], 500);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service  = Service::find($id);
        if($service){
            $service->delete();
            return response()->json([
                'status' => 200,
                'message' => "Service Deleted"
            ], 200);
        }
        else{
            return response()->json([
                'status' => 500,
                'message' => "No Service Found"
            ], 500);
        }       
    }
}
