<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use DB;

class managecatagory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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



    public function cement(){

            // $catagory=item::where('catagory_name','cement');
        // return view('item.additem');

    }
    public function search(Request $request){
       $products=item::all();
       
            $search=$request->search;
          $data = DB::table('items')
                     ->join('catagories','items.c_id','catagories.id')
                     ->join('model_tables','items.m_id','model_tables.id')
                     ->where('model_tables.c_id','1')
                     
                     ->where('model_tables.m_name', 'like', '%' . $search . '%')
                    ->orwhere('catagories.c_name', 'like', '%' . $search . '%')
                    ->orwhere('items.i_name', 'like', '%' . $search . '%')
                    ->orwhere('items.date', 'like', '%' . $search . '%')
                    ->orwhere('items.quantity', 'like', '%' . $search . '%')
                    ->orwhere('items.price', 'like', '%' . $search . '%')                     
                     ->select('catagories.c_name','model_tables.m_name','items.*')
                     ->paginate(2);


          
             if ($request->ajax()) {
            return view('newproduct', compact('data'));
        }
  
        return view('item.ajaxPagination',compact('data','products'));                  






    }
}
