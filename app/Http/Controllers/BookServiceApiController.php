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
    public function show(BookService $bookService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookService  $bookService
     * @return \Illuminate\Http\Response
     */
    public function edit(BookService $bookService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookServiceRequest  $request
     * @param  \App\Models\BookService  $bookService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookServiceRequest $request, BookService $bookService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookService  $bookService
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookService $bookService)
    {
        //
    }
}
