<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;

class DoctorApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = Doctor::all();
        if($doctor->count() > 0){

            return response()->json([
                'status'=>200,
                'doctors'=>$doctor
            ],200);
        }else{
            return response()->json([
                'status'=>404,
                'doctors'=>"No Record found"
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
     * @param  \App\Http\Requests\StoreDoctorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'age' => 'required|digit',
            'mobile' => 'required|digit|min:10',
            'gender' => 'required|in:male,female,ohers',
            'specialization' => 'required|string',
            'experience' => 'required|string',
            'qualification' => 'required|string',
            'visiting_charge' => 'required|digit',
            'online_charge' => 'required|digit',
            'landmark' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
          
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {
            $doctor = Doctor::create([
                'name' => $request->name,
                'email' => $request->email,
                'age' => $request->age,
                'mobile' => $request->mobile,
                'gender' => $request->gender,
                'specialization' => $request->specialization,
                'experience' => $request->experience,
                'qualification' => $request->qualification,
                'visiting_charge' => $request->visiting_charge,
                'online_charge' => $request->online_charge,
                'landmark' => $request->landmark,
                'city' => $request->city,
                'state' => $request->state,
               
            ]);
    
            if ($doctor) {
                return response()->json([
                    'status' => 200,
                    'message' => "Doctor Added Successfully"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to add Doctor"
                ], 500);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorRequest  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
