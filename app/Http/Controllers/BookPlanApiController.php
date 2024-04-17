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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookPlan  $bookPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(BookPlan $bookPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookPlanRequest  $request
     * @param  \App\Models\BookPlan  $bookPlan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookPlanRequest $request, BookPlan $bookPlan)
    {
        //
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
