<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medicos;

class MedicosController extends Controller
{
    public function index(){
        return response(Medicos::all(), 200);
    }

    public function show($id){
        if ($medicos = Medicos::find($id)){
            return response($medicos,200);
        } else{
            return response([],404);
        }
        
    }
}
