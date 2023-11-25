<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['users'] = [
            ['fname'=>'Kawsar','lname'=>'Ahmed'],
            ['fname'=>'Khair','lname'=>'Ahmed'],
            ['fname'=>'Lamia','lname'=>'Rahman'],
            ['fname'=>'Nur','lname'=>'Mohammad'],
        ];
        return view('home',$data);
    }

    public function calculate(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;
        $data['sum'] = $num1 + $num2;
        return view('calculate',$data);
    }

    public function asset(Request $request){

        return view('asset');
    }
}
