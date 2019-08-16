<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageRequestController extends Controller
{
    // ## -- 1. View Landing
    public function viewLanding(){
        return view("landing");
    }

    // ## -- 2. View Remark - Secgen 2020
    public function viewRemarkSecgen2020(){
        return view("remark")->with('getString', 'secgen2020');
    }

    // ## -- 3. View Remark - GMUNC Advisor
    public function viewRemarkSecgenGmunc(){
        return view("remark")->with('getString', 'gmunc');
    }
}
