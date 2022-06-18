<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rota; 


class RotaController extends Controller
{
    
    public function viewRota(){   
        return view('Rota'); 
         
    }

    public function rota(Request $request){
  
        
            if($request->day=="Monday")  {

            
            $shift='Full';
            $hour=16;
            $min=$hour*60;
            $shop="FunHouse";
            $staff="Black Widow";
            $day=$request->day; 

            return view('Rota')->with(compact('shift'))->with(compact('day'))->with(compact('shop'))->with(compact('staff'))->with(compact('min'));;

            }
            if($request->day=="Thuesday")  {

            
            $shift='Morning';
            $hour=8;
            $min=$hour*60;
            $shop="FunHouse";
            $staff="Thor";
            $day=$request->day; 

            return view('Rota')->with(compact('shift'))->with(compact('day'))->with(compact('shop'))->with(compact('staff'))->with(compact('min'));;

            }    
            
            if($request->day=="Wednesday")  {

                if($request->shift=="Morning")  {  
            
                    $shift='Morning';
                    $hour=8;
                    $min=$hour*60;
                    $shop="FunHouse";
                    $staff="Wolverine";
                    $day=$request->day; 
                }
                if($request->shift=="Evening")  {
                    
                    $shift='Evening';
                    $hour=12;
                    $min=$hour*60;
                    $shop="FunHouse";
                    $staff="Gamorra";
                    $day=$request->day; 
                } 
    
                return view('Rota')->with(compact('shift'))->with(compact('day'))->with(compact('shop'))->with(compact('staff'))->with(compact('min'));;
    
            }    

       
      
    }

}
