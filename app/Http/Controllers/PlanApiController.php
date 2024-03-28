<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePlanRequest;
use Validator;

class PlanApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan = Plan::all();
        if($plan->count() > 0){

            return response()->json([
                'status'=>200,
                'plans'=>$plan
            ],200);
        }else{
            return response()->json([
                'status'=>404,
                'plans'=>"No Record found"
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
     * @param  \App\Http\Requests\StorePlanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'feature' => 'required|string|min:2',
            'price' => 'required|numeric|min:0', // Corrected validation rules
            'discount_price' => 'required|numeric|min:0', // Corrected validation rules
            'recommendation' => 'required|string|min:2',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {
            $plan = Plan::create([
                'name' => $request->name,
                'feature' => $request->feature,
                'price' => $request->price,
                'discount_price' => $request->discount_price,
                'recommendation' => $request->recommendation,
            ]);
    
            if ($plan) {
                return response()->json([
                    'status' => 200,
                    'message' => "Plan Added Successfully"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to add Plan"
                ], 500);
            }
        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan = Plan::find($id);
        if($plan){
            return response()->json([
                'status' => 200,
                'message' => $plan
            ], 200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "No Plan Found"
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $plan = Plan::find($id);
        if($plan){
            return response()->json([
                'status' => 200,
                'message' => $plan
            ], 200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "No Plan Found"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlanRequest  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'feature' => 'required|string|min:2',
            'price' => 'required|numeric|min:0', // Corrected validation rules
            'discount_price' => 'required|numeric|min:0', // Corrected validation rules
            'recommendation' => 'required|string|min:2',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {
            $plan = Plan::find($id);
            if ($plan) {
                $plan->update([
                    'name' => $request->name,
                    'feature' => $request->feature,
                    'price' => $request->price,
                    'discount_price' => $request->discount_price,
                    'recommendation' => $request->recommendation,
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Plan Updated Successfully"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "No Plan Found"
                ], 500);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan  = Plan::find($id);
        if($plan){
            $plan->delete();
            return response()->json([
                'status' => 200,
                'message' => "Plan Deleted"
            ], 200);
        }
        else{
            return response()->json([
                'status' => 500,
                'message' => "No Plan Found"
            ], 500);
        }
        
    }
}
