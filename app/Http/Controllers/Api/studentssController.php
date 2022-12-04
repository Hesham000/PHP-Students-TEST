<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\studentss;
use Illuminate\Http\Request;

class studentssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return $request;
        $student = new studentss();
        $student->id =$request->input('id');
        $student->Name =$request->input('Name');
        $student->Branch =$request->input('Branch');
        $student->GPA =$request->input('GPA');
        $student->save();

        return response()-> json($student);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\studentss  $studentss
     * @return \Illuminate\Http\Response
     */
    public function show(studentss $studentss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\studentss  $studentss
     * @return \Illuminate\Http\Response
     */
    public function edit(studentss $studentss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\studentss  $studentss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studentss $studentss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\studentss  $studentss
     * @return \Illuminate\Http\Response
     */
    public function destroy(studentss $studentss)
    {
        //
    }
}
