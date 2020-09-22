<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\branch;
use App\store;
use App\product;
class branchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=product::all();
        $stores =store::all();
        $branchs=branch::all();
        return view('branch',compact('branchs','stores','products'));
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
        $branches = branch ::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'store_id'=>$request->store_id,
            'product_id'=>$request->product_id,
            'quantity'=>$request->quantity


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
        $branchs =branch::find($id);
        $branchs->name=$request->name;
        $branchs->address=$request->address;
        $branchs->store_id=$request->store;
        $branches->product_id=$request->product_id;
        $branches->quantity=$request->quantity;

        $branchs->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branches =branch::find($id)->delete();
        return back();
    }
}
