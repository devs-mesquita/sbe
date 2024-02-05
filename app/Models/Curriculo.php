<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    use HasFactory;

    protected $table = "curriculos";

    protected $fillable = [
            
            'pcd',             
            'tipo_deficiencia',
            'nome',            
            'nascimento',      
            'sexo',            
            'raca',            
            'cpf',             
            'escolaridade',    
            'estagio',         
            'curso',           
            'periodo',         
            'cep',             
            'bairro',          
            'rua',       
            'numero',          
            'complemento',     
            'telefone_1',      
            'telefone_2',     
            'comentario',
            'created_at',
            'updated_at',      
   
   
    ];
}
