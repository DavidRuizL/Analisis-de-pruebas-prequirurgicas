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
        //
    }
}
