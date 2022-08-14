<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Control;
use Illuminate\Support\Facades\DB;



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

//NIVEL 1
      $p_tp1 = DB::table('controles')->avg('tp1');
      $p_ptt1 = DB::table('controles')->avg('ptt1');
      $p_at1 = DB::table('controles')->avg('at1');
      $p_tt1 = DB::table('controles')->avg('tt1');
      $p_fb1 = DB::table('controles')->avg('fb1');
//NIVEL 2
      $p_tp2 = DB::table('controles')->avg('tp2');
      $p_ptt2 = DB::table('controles')->avg('ptt2');
      $p_at2 = DB::table('controles')->avg('at2');
      $p_tt2 = DB::table('controles')->avg('tt2');
      $p_fb2 = DB::table('controles')->avg('fb2');
//NIVEL 3
      $p_tp3 = DB::table('controles')->avg('tp3');
      $p_ptt3 = DB::table('controles')->avg('ptt3');
      $p_at3 = DB::table('controles')->avg('at3');
      $p_tt3 = DB::table('controles')->avg('tt3');
      $p_fb3= DB::table('controles')->avg('fb3');


//NIVEL 1 calculo de desviacion estandar
      $variance_tp1 = 0.0;
      $variance_ptt1 = 0.0;
      $variance_at1 = 0.0;    
      $variance_tt1 = 0.0;
      $variance_fb1 = 0.0;

      $variance_tp2 = 0.0;
      $variance_ptt2 = 0.0;
      $variance_at2 = 0.0;    
      $variance_tt2 = 0.0;
      $variance_fb2 = 0.0;

      $variance_tp3 = 0.0;
      $variance_ptt3 = 0.0;
      $variance_at3 = 0.0;    
      $variance_tt3 = 0.0;
      $variance_fb3 = 0.0;

          
      for ($j = 0; $j < count($control); $j++){

          $variance_tp1 += pow(($control[$j]->tp1 - DB::table('controles')->avg('tp1')), 2);
          $variance_ptt1 += pow(($control[$j]->tp1 - DB::table('controles')->avg('ptt1')), 2);
          $variance_at1 += pow(($control[$j]->tp1 - DB::table('controles')->avg('at1')), 2);   
          $variance_tt1 += pow(($control[$j]->tp1 - DB::table('controles')->avg('tt1')), 2);
          $variance_fb1 += pow(($control[$j]->tp1 - DB::table('controles')->avg('fb1')), 2);

          $variance_tp2 += pow(($control[$j]->tp1 - DB::table('controles')->avg('tp2')), 2);
          $variance_ptt2 += pow(($control[$j]->tp1 - DB::table('controles')->avg('ptt2')), 2);
          $variance_at2 += pow(($control[$j]->tp1 - DB::table('controles')->avg('at2')), 2);   
          $variance_tt2 += pow(($control[$j]->tp1 - DB::table('controles')->avg('tt2')), 2);
          $variance_fb2+= pow(($control[$j]->tp1 - DB::table('controles')->avg('fb2')), 2);

          $variance_tp3 += pow(($control[$j]->tp1 - DB::table('controles')->avg('tp3')), 2);
          $variance_ptt3 += pow(($control[$j]->tp1 - DB::table('controles')->avg('ptt3')), 2);
          $variance_at3+= pow(($control[$j]->tp1 - DB::table('controles')->avg('at3')), 2);   
          $variance_tt3 += pow(($control[$j]->tp1 - DB::table('controles')->avg('tt3')), 2);
          $variance_fb3 += pow(($control[$j]->tp1 - DB::table('controles')->avg('fb3')), 2);

        }  


      $d_tp1 = number_format(sqrt($variance_tp1/count($control)), 2);
      $d_ptt1 = number_format(sqrt($variance_ptt1/count($control)), 2);
      $d_at1 = number_format(sqrt($variance_at1/count($control)), 2);
      $d_tt1 = number_format(sqrt($variance_tt1/count($control)), 2);
      $d_fb1 = number_format(sqrt($variance_fb1/count($control)), 2);

      $d_tp2 = number_format(sqrt($variance_tp2/count($control)), 2);
      $d_ptt2 = number_format(sqrt($variance_ptt2/count($control)), 2);
      $d_at2 = number_format(sqrt($variance_at2/count($control)), 2);
      $d_tt2 = number_format(sqrt($variance_tt2/count($control)), 2);
      $d_fb2 = number_format(sqrt($variance_fb2/count($control)), 2);

      $d_tp3 = number_format(sqrt($variance_tp3/count($control)), 2);
      $d_ptt3 = number_format(sqrt($variance_ptt3/count($control)), 2);
      $d_at3 = number_format(sqrt($variance_at3/count($control)), 2);
      $d_tt3 = number_format(sqrt($variance_tt3/count($control)), 2);
      $d_fb3 = number_format(sqrt($variance_fb3/count($control)), 2);


      $data=array('tp1'=>$p_tp1, 'ptt1'=>$p_ptt1,'at1'=>$p_at1,'tt1'=>$p_tt1,'fb1'=>$p_fb1, 'tp2'=>$p_tp2, 'ptt2'=>$p_ptt2, 'at2'=>$p_at2, 'tt2'=>$p_tt2, 'fb2'=>$p_fb2, 'tp3'=>$p_tp3, 'ptt3'=>$p_ptt3,'at3'=>$p_at3,'tt3'=>$p_tt3,'fb3'=>$p_fb3, 'dtp1'=>$d_tp1, 'dptt1'=>$d_ptt1,'dat1'=>$d_at1,'dtt1'=>$d_tt1,'dfb1'=>$d_fb1, 'dtp2'=>$d_tp2, 'dptt2'=>$d_ptt2, 'dat2'=>$d_at2, 'dtt2'=>$d_tt2, 'dfb2'=>$d_fb2, 'dtp3'=>$d_tp3, 'dptt3'=>$d_ptt3,'dat3'=>$d_at3,'dtt3'=>$d_tt3,'dfb3'=>$d_fb3);

      return view('controles.index',  ['controles' => $control, "data"=>$data] );
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
        
        $control->save();
        return redirect('/controles');
    }

}
