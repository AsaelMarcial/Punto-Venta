<?php

namespace App\Http\Controllers;

use App\Models\Egreso;
use Illuminate\Http\Request;

class EgresoController extends Controller
{
    
    function __construct()
    {
         $this->middleware('permission:egreso-list|egreso-create|egreso-edit|egreso-delete', ['only' => ['index','show']]);
         $this->middleware('permission:egreso-create', ['only' => ['create','store']]);
         $this->middleware('permission:egreso-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:egreso-delete', ['only' => ['destroy']]);
    }
    
    public function index()
    {

        $egresos = Egreso::latest()->paginate(5);
        return view('egresos.index',compact('egresos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
