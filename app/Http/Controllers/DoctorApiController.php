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
            'preferred_day' => 'required',
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

                // Convert day and time to JSON
                
                $input = $request->input('preferred_day');

                // Filter out the selected days
                $selectedDays = collect($input)->filter(function ($day) {
                    // return isset($day['day']) && $day['day'] == true; // Assuming 'on' is the value when the checkbox is checked
                    return isset($day['day']); // Assuming 'on' is the value when the checkbox is checked
                })->toArray();
            
                // Convert the filtered data to JSON
                $jsonData = json_encode($selectedDays);
                // dd($selectedDays);
                // dd($jsonData);

            

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
                'preferred_day' => $jsonData,
                'landmark' => $request->landmark,
                'city' => $request->city,
                'state' => $request->state,
                'image' => $filename,
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
    public function show($id)
    {
        $doctor = Doctor::find($id);
        if($doctor){
            return response()->json([
                'status' => 200,
                'data' => $doctor
            ], 200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "No doctor Found"
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorRequest  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Find the hall frame by ID
        $hallFrame = HallFrame::findOrFail($id);

        // Update hall frame attributes
        $hallFrame->name = $request->input('name');
        $hallFrame->position = $request->input('position');
        $hallFrame->industry = $request->input('industry');
        $hallFrame->description = $request->input('description');

        // Handle featured image upload if provided
        if ($request->hasFile('featured_image')) {
            $filename = time() . '.' . $request->featured_image->extension();
            $request->featured_image->move(public_path('image'), $filename);
            $hallFrame->featured_image = $filename;
        }

        // Save the updated hall frame
        $hallFrame->save();

        // Return a success response
        return response()->json(['message' => 'Hall Frame updated successfully', 'hallFrame' => $hallFrame]);
    }


    
    public function edit($id)
    {
        $student = User::findOrFail($id);
        return response()->json([
            'user' => $student,
            'success' => true,
            'msg' => 'Student fetched successfully'
        ]);
    }


    // for manage student

    public function upgrade(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'f_name' => 'required|string|between:2,100',
            'address' => 'required|string|between:2,100',
            'gender' => 'required|in:Male,Female,Other',
            'mobile_no' => 'required|string|max:12|',
            'email' => 'required|string|email|max:100|unique:users,email,'.$id,
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user->update($validator->validated());

        return response()->json([
            'user' => $user,
            'success' => true,
            'msg' => 'Student updated successfully'
        ]);
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor  = Doctor::find($id);
        if($doctor){
            $doctor->delete();
            return response()->json([
                'status' => 200,
                'message' => "Doctor Deleted Successfully"
            ], 200);
        }
        else{
            return response()->json([
                'status' => 500,
                'message' => "No Doctor Found"
            ], 500);
        }       
    }
}