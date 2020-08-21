<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Hash;
use DB;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.adduser');
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
             user::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'user_role'=>$request->role,
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
            $product = DB::table('users')
                ->select('*')
                ->where('id',$id)
                ->get();
                session(['id' => $id]);
                return view('user.edituser',['product'=>$product]);
    }

    public function edit1(Request $request){

        $id = $request->session()->get('id');

            user::findOrFail($id)->update([
             
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'user_role'=>$request->role,
             ]);
        return redirect()->back()->with('success','data insert successfully');



    }


     public function delete($id)
    {
        user::findOrFail($id)->delete();
         return back();
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
         $products=user::all();

        $data = user::paginate(3);
  
        if ($request->ajax()) {
            return view('user', compact('data'));
        }
  
        return view('user.ajaxPagination',compact('data','products'));
    }
}
