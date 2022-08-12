<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\Control;

class ControlController extends Controller
{
      /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $control=  \App\Models\Control::all();
      return view('controles.index')->with('controles', $control);
  }

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('controles.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $control = new Control();
        $control->tp1 =$request->get('tp1');
        $control->ptt1 =$request->get('ptt1');
        $control->at1 =$request->get('at1');
        $control->tt1 =$request->get('tt1');
        $control->fb1 =$request->get('fb1');

        $control->tp2 =$request->get('tp2');
        $control->ptt2 =$request->get('ptt2');
        $control->at2 =$request->get('at2');
        $control->tt2 =$request->get('tt2');
        $control->fb2 =$request->get('fb2');

        $control->tp3 =$request->get('tp3');
        $control->ptt3 =$request->get('ptt3');
        $control->at3 =$request->get('at3');
        $control->tt3 =$request->get('tt3');
        $control->fb3 =$request->get('fb3');
        
        $user->save();
        return redirect('/controles');
    }

}
