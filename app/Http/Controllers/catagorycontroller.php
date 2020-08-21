<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catagory;
use DB;

class catagorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('catagory.addcatagory');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        catagory::insert([
                'c_name'=>$request->c_name,
                'status'=>$request->status,
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
            
                return view('Management.showcatagory');
    }

    public function showcement(){

                $data = DB::table('catagories')
                     ->join('model_tables','catagories.id','model_tables.c_id')
                     ->where('catagories.c_name','=','cement')
                     ->select('catagories.c_name','model_tables.m_name','model_tables.id')
                     ->get();
                return view('Management.showcementmodels',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
