<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class Seater extends Controller
{
    public function index() {
        $data['tables'] = Table::layout();

        return view('loader', $data);
    }

    public function backLayout() {
        
        $data['tables'] = Table::layout();
        
        return view('seaterAdmin', $data);
    }
}
