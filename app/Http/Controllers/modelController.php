<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model_table;
use DB;

class modelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $countries=DB::table('catagories')->pluck("c_name","id");
        return view('model.addmodel',compact('countries'));
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
          model_table::insert([
                'm_name'=>$request->m_name,
                'c_id'=>$request->country,

        ]);
        return back();
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

                 $product = DB::table('model_tables')
                ->select('*')
                ->where('id',$id)
                ->get();
                session(['id' => $id]);
                $countries=DB::table('catagories')->pluck("c_name","id");
                return view('model.editmodel',['product'=>$product],compact('countries'));
    }


    public function edit1(Request $request){

         $id = $request->session()->get('id');
        model_table::findOrFail($id)->update([
            'm_name'=>$request->m_name,
            'c_id'=>$request->country,   
             ]);
        return redirect()->back()->with('success','data insert successfully');
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
     public function ajaxPagination(Request $request)
    {
         $products=model_table::all();

        $data = model_table::paginate(3);
  
        if ($request->ajax()) {
            return view('managemodel', compact('data'));
        }
    
        return view('model.ajaxPagination1',compact('data','products'));
    }

     public function delete($id)
    {
        model_table::findOrFail($id)->delete();
         return back();
    }
}
