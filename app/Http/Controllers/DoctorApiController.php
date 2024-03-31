<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Validator;

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
                'data'=>$doctor
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
     * @param  \App\Http\Requests\StoreDoctorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'age' => 'required|numeric|min:2',
            'mobile' => 'required',
            'image' => 'required',
            'gender' => 'required|in:male,female,others',
            'specialization' => 'required|string',
            'experience' => 'required|string',
            'qualification' => 'required|string',
            'visiting_charge' => 'required|numeric',
            'online_charge' => 'required|numeric',
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

            // image work

            $filename = time() . "." . $request->image->extension();        //upload on public/doctor/image/filename
            $request->image->move(public_path("image/doctor"), $filename);

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
                'image' => $filename
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
