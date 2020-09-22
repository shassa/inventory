<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function update(Request $request,$id)
    {
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $users=user::find($id);
        $users->name=$users->name;
        $users->email=$users->email;
        $users->password=$users->password;
        $users->image=$imageName;
        $users->save();
        return back();
    }

}