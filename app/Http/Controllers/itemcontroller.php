<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use DB;
use Illuminate\support\Str;
use Image;
class itemcontroller extends Controller
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
         $countries=DB::table('catagories')->pluck("c_name","id");
            return view('item.additem',compact('countries'));
    }

        public function getsub($id){
         $states=DB::table("model_tables")->where('c_id',$id)->pluck("m_name","id");
             return json_encode($states);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
               
                $id = $request->session()->get('id');
                $product_image = item::findOrFail($id)->p_image;   

            if($request->hasFile('p_image')){
        $get_image = $request->file('p_image');
        $image = time().Str::random(10).'.'.$get_image->getClientOriginalExtension();
        Image::make($get_image)->resize(300,200)->save(public_path('image/product/'.$image));

         if(file_exists($product_image)){
                    unlink($product_image);
                }
    }

     else{
            $image = $product_image;
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
        // return back();
    }


    public function manage(){
           
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
                return view('item.edititem',['product'=>$product]);
    }



        public function edit1(Request $request)
    {
                $id = $request->session()->get('id');
                $product_image = item::findOrFail($id)->p_image;   

            if($request->hasFile('p_image')){
        $get_image = $request->file('p_image');
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
            'status'=>$request->status,
            'date'=>$request->date,
            'quantity'=>$request->quan,
            'p_image'=>'image/product/'.$image,
            'price'=>$request->price,
            
             ]);
        return redirect()->back()->with('success','data insert successfully');


    }


     public function delete($id)
    {
         item::findOrFail($id)->delete();
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


    public function ajaxPagination(Request $request,$id)
    {
        $c_id=$id;

          $products=item::all();

          // $data = DB::table('items')
          //            ->join('catagories','items.c_id','catagories.id')
          //            ->join('model_tables','items.m_id','model_tables.id')
          //            ->where('model_tables.c_id',$c_id)

          //            ->select('catagories.c_name','model_tables.m_name','items.*')
          //            ->paginate(2);       

          $data = DB::table('items')
                     ->join('catagories','items.c_id','catagories.id')
                     ->join('model_tables','items.m_id','model_tables.id')
                     ->where('model_tables.id',$c_id)

                     ->select('catagories.c_name','model_tables.m_name','items.*')
                     ->paginate(2);

          
             if ($request->ajax()) {
            return view('newproduct', compact('data'));
        }
  
        return view('item.ajaxPagination',compact('data','products'));                   


    }



    public function search(Request $request){


                 $search = $request->search;
                    

    }
}


