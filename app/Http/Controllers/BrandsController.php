<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brand;
class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
       $this->middleware('admin',['except' => ['index','show']]);
     }

    public function index()
    {
        $brands=brand::all();
        return view('onlinestore.AllBrand',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tri_brands=brand::take(3)->orderBy('created_at','DESC')->get();
        return view('onlinestore.AdminBrand',compact('tri_brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->BrandValidator($request);
        $brandDB = new brand;
        $brandDB->name = $request->name;
        $brandDB->about = $request->about;
        $brandDB->owner = $request->owner;
        $brandDB->save();
        return redirect()->route('products.create');
    }
    public function BrandValidator($request)
    {
      $this->validate($request,[
        'name' => 'required|max:20|unique:brands',
        'about' => 'required|max:191',
        'owner' => 'required|max:50',
      ]);
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
}
