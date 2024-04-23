<?php

namespace App\Http\Controllers;

use App\Models\BookPlan;
use Illuminate\Http\Request;
use Validator;

class BookPlanApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookPlan = BookPlan::with("plan")->orderBy('created_at', 'desc')->get();
        if ($bookPlan->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $bookPlan
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookPlanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'guardian_name' => 'required|string|min:3',
            'patient_name' => 'required|string|min:3',
            'mobile' => 'required',
            'email' => 'required|email',
            'plan_id' => 'required',
            'address' => 'required|string', 
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {

            $bookPlan = BookPlan::create([
                'patient_name' => $request->patient_name,
                'guardian_name' => $request->guardian_name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'plan_id' => $request->plan_id,
                'address' => $request->address,              
            ]);
    
            if ($bookPlan) {
                return response()->json([
                    'status' => 200,
                    'message' => "We Will Connect You Soon"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to Book Your Plan"
                ], 500);
            }
        }
    }

    public function bookPlan(Request $request, $plan_id)
{
    $validator = Validator::make($request->all(), [
        'guardian_name' => 'required|string|min:3',
        'patient_name' => 'required|string|min:3',
        'mobile' => 'required',
        'email' => 'required|email',
        'address' => 'required|string', 
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 422,
            'error' => $validator->messages()
        ], 422);
    } else {
        $bookPlan = BookPlan::create([
            'patient_name' => $request->patient_name,
            'guardian_name' => $request->guardian_name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'plan_id' => $plan_id,
            'address' => $request->address,              
        ]);

        if ($bookPlan) {
            return response()->json([
                'status' => 200,
                'message' => "We Will Connect You Soon"
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "Unable to Book Your Plan"
            ], 500);
        }
    }
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookPlan  $bookPlan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookPlan = BookPlan::find($id);
        if($bookPlan){
            return response()->json([
                'status' => 200,
                'data' => $bookPlan
            ], 200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "No Plan Found"
            ], 404);
        }
    }

    public function edit($id)
    {
        $bookPlan = BookPlan::findOrFail($id);
        return response()->json([
            'data' => $bookPlan,
            'success' => true,
            'message' => 'Plan Details Has Been fetched successfully'
        ]);
    }

    public function update(Request $request, $id)
    {
        $bookPlan = BookPlan::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'guardian_name' => 'required|string|min:3',
            'patient_name' => 'required|string|min:3',
            'mobile' => 'required',
            'email' => 'required|email',
            'plan_id' => 'required',
            'address' => 'required|string',            
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $bookPlan->update($validator->validated());

        return response()->json([
            'data' => $bookPlan,
            'success' => true,
            'message' => 'Your Plan Has Been updated successfully'
        ]);
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookPlan  $bookPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookPlan = BookPlan::find($id);
        if($bookPlan){
            $bookPlan->delete();
            return response()->json([
                'status' => 200,
                'message' => "Plan Deleted Successfully"
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
