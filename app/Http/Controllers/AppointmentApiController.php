<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Validator;

class AppointmentApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointment = Appointment::with("doctor")->orderBy('created_at', 'desc')->get();

        if($appointment->count() > 0){

            return response()->json([
                'status'=>200,
                'data'=>$appointment
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
     * @param  \App\Http\Requests\StoreAppointmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'age' => 'required|numeric',
            'mobile' => 'required|string|min:3',
            'doctor_id' => 'required',
            'appointment_day_time' => 'required',
            'appointment_type' => 'required',
            'gender' => 'required|in:male,female,others',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {

            $appointment = Appointment::create([
                'name' => $request->name,
                'age' => $request->age,
                'gender' => $request->gender,
                'address' => $request->address,
                'mobile' => $request->mobile,
                'doctor_id' => $request->doctor_id,
                'appointment_type' => $request->appointment_type,
                'appointment_day_time' => $request->appointment_day_time,
          
            ]);
    
            if ($appointment) {
                return response()->json([
                    'status' => 200,
                    'message' => "Appointment Added Successfully"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to add Appointment"
                ], 500);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppointmentRequest  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment  = Appointment::find($id);
        if($appointment){
            $appointment->delete();
            return response()->json([
                'status' => 200,
                'message' => "Appointment Deleted Successfully"
            ], 200);
        }
        else{
            return response()->json([
                'status' => 500,
                'message' => "No Appointment Found"
            ], 500);
        }       
    }
}
