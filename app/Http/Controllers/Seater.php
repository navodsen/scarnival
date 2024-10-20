<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class Seater extends Controller
{
    public function index() {
        $data['tables'] = Table::layout();
        $data['ss'] = "sss";

        return view('loader', $data);
    }

    // public function backLayout() {
        
    //     $data['tables'] = Table::layout();
    //     $data['ss'] = "sss";
        
    //     return view('loader', $data);
    // }
}
