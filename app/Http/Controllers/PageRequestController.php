<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageRequestController extends Controller
{
    // ## -- 1. View Landing
    public function viewLanding(){
        return view("landing");
    }

    // ## -- 2. View Landing
    public function viewRemarkSecgen2020(){
        return view("remark")->with('getString', 'secgen2020');
    }

    // ## -- 3. View Landing
    public function viewRemarkSecgen2019(){
        return view("remark")->with('getString', 'secgen2019');
    }

    public function viewRemarkGmuncAdvisor(){
        return view("remark")->with('getString', 'gmunc');
    }
}
