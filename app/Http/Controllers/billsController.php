<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bills;
use App\branch;
use App\product;
class billsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branchs =branch::all();
        $products =product::all();
        $bills=bills::all();
        return view('bills',compact('bills','branchs','products'));
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
        $bills =bills::create([
            'product_id'=>$request->product_id,
            'branch_id'=>$request->branch_id,
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
        $bills =bills::find($id);
        $bills->product_id=$request->product_name;
        $bills->branch_id=$request->branch;
        $bills->quantity=$request->quantity;
        $bills-> save();
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
        $bills =bills::find($id)->delete();
        return back();
    }
}
