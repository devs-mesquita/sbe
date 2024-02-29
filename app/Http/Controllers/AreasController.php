<?php

namespace App\Http\Controllers;

use App\Models\Area;
// use App\Models\Curriculo;
use Illuminate\Http\Request;

class AreasController extends Controller
{

    public function index()
    {
        $areas = Area::all();




        // dd($contrato);

        return view('areas.index', compact('areas'));


    }

    public function create()
    {
        $areas = Area::all();
        return view('areas.create', compact('areas'));
    }

    public function store(Request $request)
    {

        // dd($request->all());
        //Encontrar o contrato pelo ID com 
        $areas = new Area;
        $areas->descricao = $request->descricao;
        $areas->save();



        return redirect('/areas');
    }
    public function destroy($id)
    {
        $areas = Area::findOrFail($id);
        $areas->delete();


    }


}