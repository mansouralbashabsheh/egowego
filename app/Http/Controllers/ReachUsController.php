<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reachus;
class ReachUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('layouts.ReachUs');
    }

 
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validte=$request->validate(
           [
               'email'=>'required',
               'topic'=>'required',
               'massage'=>'required|max:250|min:10'
           ]
       );

       $insert=new Reachus();
       $insert->email=$request->email;
       $insert->topic=$request->topic;
       $insert->massage=$request->massage;
       $insert->save();
       return redirect('/ReachUs')->with('success','your massage sended');
       
    }

   
   
}
