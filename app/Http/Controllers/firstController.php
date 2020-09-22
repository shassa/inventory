<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\store;
use App\branch;
use App\category;
use App\product;
use App\bills;


class firstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = product::all();
        $categories = category::all();
        $stories = store::all();
        $branches = branch::all();
        $bills = bills::all();

        return view('first',compact('products','categories','stories','branches','bills'));
        // $stores = DB::table('stores')->get();
        // $stores = DB::table('stores')->count();

        // $branches = DB::table('branches')->get();
        // $branches = DB::table('branches')->count();

        // $categories = DB::table('categories')->get();
        // $categories = DB::table('categories')->count();

        // $products = DB::table('products')->get();
        // $products = DB::table('products')->count();

        // $bills = DB::table('bills')->get();
        // $bills = DB::table('bills')->count();
    
        // return view('first',['categories'=>$categories,'products'=>$products,'bills'=>$bills,'stores'=>$stores,'branches'=>$branches]);
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
        //
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
