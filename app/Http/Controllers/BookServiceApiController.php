<?php

namespace App\Http\Controllers;

use App\Models\BookService;
use Illuminate\Http\Request;
use Validator;

class BookServiceApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookService = BookService::with("service")->orderBy('created_at', 'desc')->get();
        if ($bookService->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $bookService
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
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
     * @param  \App\Http\Requests\StoreBookServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'mobile' => 'required',
            'email' => 'required|email',
            'service_id' => 'required',
            'message' => 'required',
            'address' => 'required|string', 
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {

            $bookService = BookService::create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'service_id' => $request->service_id,
                'message' => $request->message,
                'address' => $request->address,              
            ]);
    
            if ($bookService) {
                return response()->json([
                    'status' => 200,
                    'message' => "We Will Connect You Soon"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to Book Service"
                ], 500);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookService  $bookService
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookService = BookService::find($id);
        if($bookService){
            return response()->json([
                'status' => 200,
                'data' => $bookService
            ], 200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "No Service Found"
            ], 404);
        }
    }

    public function edit($id)
    {
        $bookService = BookService::findOrFail($id);
        return response()->json([
            'data' => $bookService,
            'success' => true,
            'message' => 'Service Details Has Been fetched successfully'
        ]);
    }

    public function update(Request $request, $id)
    {
        $bookService = BookService::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'mobile' => 'required',
            'email' => 'required|email',
            'service_id' => 'required',
            'message' => 'required',
            'address' => 'required|string',            
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $bookService->update($validator->validated());

        return response()->json([
            'data' => $bookService,
            'success' => true,
            'message' => 'Your Service Has Been updated successfully'
        ]);
}
    public function destroy($id)
    {
        $bookService = BookService::find($id);
        if($bookService){
            $bookService->delete();
            return response()->json([
                'status' => 200,
                'message' => "Book Service Deleted Successfully"
            ], 200);
        }
        else{
            return response()->json([
                'status' => 500,
                'message' => "No Book Service Found"
            ], 500);
        }       
    }
}
