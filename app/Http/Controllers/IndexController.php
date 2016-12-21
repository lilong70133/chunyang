<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    private $assign;

    public function __construct(){
        $this->assign = [];
    }

    public function index(){
        $temp = url('home');
        $this->assign['temp'] = $temp;
        return view('welcome',$this->assign);
    }
}
