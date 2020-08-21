<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use DB;
use Illuminate\support\Str;
use Image;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $countries=DB::table('catagories')->pluck("c_name","id");
            return view('item.additem',compact('countries'));
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

          if($request->hasFile('p_image')){
        $get_image = $request->file('p_image');
        $image = time().Str::random(10).'.'.$get_image->getClientOriginalExtension();
        Image::make($get_image)->resize(300,200)->save(public_path('image/product/'.$image));
    }

     else{
            $image = "default.png";
        }

        item::insert([
            'i_name'=>$request->i_name,
            'c_id'=>$request->country,
            'm_id'=>$request->state,
            'image'=>'image/product/'.$image,
            'status'=>$request->status,
            
            'date'=>$request->date,
            'quantity'=>$request->quan,
            'price'=>$request->price,
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
         $product = DB::table('items')
                ->select('*')
                ->where('id',$id)
                ->get();
                session(['id' => $id]);
                return view('product.productedit',['product'=>$product]);
    }


    public function edit1(Request $request)
    {
                $id = $request->session()->get('id');
                $product_image = item::findOrFail($id)->image;   

            if($request->hasFile('image')){
        $get_image = $request->file('image');
        $image = time().Str::random(10).'.'.$get_image->getClientOriginalExtension();
        Image::make($get_image)->resize(300,200)->save(public_path('image/product/'.$image));

         if(file_exists($product_image)){
                    unlink($product_image);
                }
    }

     else{
            $image = $product_image;
                //problem detect
        }

        item::findOrFail($id)->update([
             
            'i_name'=>$request->i_name,
            'c_id'=>$request->country,
            'm_id'=>$request->state,
            'image'=>'image/product/'.$image,
            'status'=>$request->status,
            
            'date'=>$request->date,
            'quantity'=>$request->quan,
            'price'=>$request->price,
            
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
}
