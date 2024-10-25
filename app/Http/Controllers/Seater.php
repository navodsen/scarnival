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

    public function updateTable(Request $request) {
        $table = Table::find($request->id);
        if ($table) {
            if ($request->active == 0 && $table->active == 0) {
                $table->active = 1;
                $table->save();
            } elseif ($request->active == 1 && $table->active == 1) {
                $table->active = 0;
                $table->save();
            }
            

            // Return updated list of tables to update the UI
            $tables = Table::layout();
            return response()->json(['tables' => $tables]);
        }

        return response()->json(['error' => 'Table not found'], 404);
    }
}
