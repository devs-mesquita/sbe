<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Curriculo;

class CurriculosController extends Controller
{
    public function index() 
    {
        $curriculos = Curriculo::all();

      


        // dd($contrato);
                
                return view('curriculos.index', compact('curriculos'));
       
    
    }

    public function create()
{
    $areas = Area::all();
    return view('curriculos.create', compact('areas')); 
}

    public function store(Request $request)
    {
           
        // dd($request->all());
        //Encontrar o contrato pelo ID com 
        $curriculos = new Curriculo;
      
        
        
        $curriculos->pcd                   = $request->pcd;
        $curriculos->tipo_deficiencia      = $request->tipo_deficiencia;
        $curriculos->nome                  = $request->nome;
        $curriculos->nascimento_old        = $request->nascimento_old;
        $curriculos->sexo                  = $request->sexo;
        $curriculos->raca                  = $request->raca;
        $curriculos->cpf                   = $request->cpf;
        $curriculos->escolaridade          = $request->escolaridade;
        $curriculos->estagio               = $request->estagio;
        $curriculos->curso                 = $request->curso;
        $curriculos->periodo               = $request->periodo;
        $curriculos->cep                   = $request->cep;
        $curriculos->bairro                = $request->bairro;
        $curriculos->rua                   = $request->logradouro;
        $curriculos->numero                = $request->numero;
        $curriculos->complemento           = $request->complemento;
        $curriculos->telefone_1            = $request->telefone_1;
        $curriculos->telefone_2            = $request->telefone_2;
        $curriculos->comentarios           = $request->comentarios;
        
        $curriculos->save();
        
       
        
        return redirect('/curriculos');
    }
     
// public function destroy($id)
// {
//     $curriculos = Curriculo::findOrFail($id)
//     $curriculos->delete();

//     return redirect()->route('curriculos.index');

//     }

}
