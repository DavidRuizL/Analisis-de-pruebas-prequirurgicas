<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    public  function  search(Request  $request)
    {
          $documento=$request['documento'] ??"" ;
          $user=DB::table('users')->where('documento', $documento)->first();
          return view('users.search' ,compact('user', 'documento'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=  \App\Models\User::all();
        return view('users.index')->with('users', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->documento =$request->get('documento');
        $user->nombre =$request->get('nombre');
        $user->apellido =$request->get('apellido');
        $user->eps =$request->get('eps');
        $user->genero =$request->get('genero');
        $user->edad =$request->get('edad');
        $user->tp =$request->get('tp');
        $user->ptt =$request->get('ptt');
        $user->at =$request->get('at');
        $user->tt =$request->get('tt');
        $user->fb =$request->get('fb');
        
        $user->save();
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $user= \App\Models\User::find($id);
          return view('users.show')->with('user' , $user);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


}
