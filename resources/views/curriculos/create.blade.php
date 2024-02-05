@extends('template.app')

@section('content')
{{-- <div class="flex">
  <div class="bg-red-500 h-[200px] flex-[2]"></div>
  <div class="bg-blue-500 h-[200px] flex-[1]"></div>
</div>
 --}}
<div class="container ml-auto mr-auto flex items-center">
<form method="post" action="{{ route('curriculos.store')}}" class="flex-col flex flex-1 gap-8">
  {{csrf_field  ()}}
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="flex flex-col">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        PCD
      </label>
      <div class="relative">
        <select name="pcd" id="pcd" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
          <option value="0">Não</option>
          <option value="1">Sim</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
    <div class="flex flex-col">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Tipo de Deficiência
      </label>
      <div class="relative">
        <select name="tipo_deficiencia" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
          <option value="Visual">Visual</option>
          <option value="Auditiva">Auditiva</option>
          <option value="Física">Física</option>
          <option value="Mental">Mental</option>
          <option value="Múltipla">Múltipla</option>  
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
  <div class="flex flex-col">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
      Nome
    </label>
    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nome" type="text" placeholder="Nome" name="nome" required>
  </div>

  <div class="flex flex-col">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Nascimento
    </label>
    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="nascimento" type="date" placeholder="dd/mm/aaaa" name="nascimento_old" required>
  </div>
  
  <div class="flex flex-col">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
      Sexo
    </label>
    <div class="relative">
      <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="sexo" name="sexo" required>
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
         
      </select>
      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
      </div>
    </div>
  </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">  
<div class="flex flex-col">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
      Raça
    </label>
    <div class="relative">
      <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="raca" name="raca" required>
        <option value= "AMARELA">AMARELA</option>
        <option value= "BRANCA">BRANCA</option>
        <option value= "INDÍGENA">INDÍGENA</option>
        <option value= "NEGRA">NEGRA</option>
        <option value= "PARDA">PARDA</option>  
        <option value= "NÃO DECLARADA">NÃO DECLARADA</option>  
      </select>
      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
      </div>
    </div>
  </div>
  <div class="flex flex-col">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
      CPF
    </label>
    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cpf" type="text"  name="cpf" placeholder="xxx.xxx.xxx-xx" required>
  </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-6">   
<div class="flex flex-col">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
      Escolaridade
    </label>
    <div class="relative">
      <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="escolaridade" name="escolaridade" required>
        <option value="Fundamental - Incompleto">Fundamental - Incompleto</option>
        <option value="Fundamental - Completo">Fundamental - Completo</option>
        <option value="Médio - Incompleto">Médio - Incompleto</option>
        <option value="Médio - Completo">Médio - Completo</option>
        <option value="Superior - Incompleto">Superior - Incompleto</option>  
        <option value="Superior - Completo">Superior - Completo</option>
        <option value="Pós-Graduação - Incompleto">Pós-Graduação - Incompleto</option>  
        <option value="Pós-Graduação - Completo">Pós-Graduação - Completo</option>
        <option value="Mestrado - Incompleto">Mestrado - Incompleto</option>  
        <option value="Mestrado - Completo">Mestrado - Completo</option>
        <option value="Doutorado - Incompleto">Doutorado - Incompleto</option>  
        <option value="Doutorado - Completo">Doutorado - Completo</option>
          
      </select>
      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
      </div>
    </div>
  </div>
  <div class="flex flex-col">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
      Estágio
    </label>
    <div class="relative">
      <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="estagio" name="estagio" required>
        <option value="1">Sim</option>
        <option value="0">Não</option>
          
      </select>
      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
      </div>
    </div>
  </div>
  
  <div class="flex flex-col">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
        Curso
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="curso" name="curso" type="text" placeholder="Nome do Curso" required>
    </div>
    <div class="flex flex-col">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Período
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="periodo" name="periodo"  required>
          <option value="10º">10º</option>
          <option value="1º">1º</option>
          <option value="2º">2º</option>
          <option value="3º">3º</option>
          <option value="4º">4º</option>  
          <option value="5º">5º</option>
          <option value="6º">6º</option>  
          <option value="7º">7º</option>
          <option value="8º">8º</option>  
          <option value="9º">9º</option>

            
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
  </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-5 gap-6">  
<div class="flex flex-col">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
      CEP
    </label>
    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cep" name="cep" type="text" placeholder="26553-080" required>
  </div>
  <div class="flex flex-col">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
      Bairro
    </label>
    <div class="relative">
      <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="bairro" name="bairro" required>
        <option value="ALTO URUGUAI"> ALTO URUGUAI </option>
        <option value="BANCO DE AREIA"> BANCO DE AREIA </option>
        <option value="BNH"> BNH </option>
        <option value="CENTRO"> CENTRO </option>
        <option value="CHATUBA"> CHATUBA </option>
        <option value="COREIA"> COREIA </option>
        <option value="COSMORAMA"> COSMORAMA </option>
        <option value="CRUZEIRO DO SUL"> CRUZEIRO DO SUL </option>
        <option value="EDSON PASSOS"> EDSON PASSOS </option>
        <option value="JACUTINGA"> JACUTINGA </option>
        <option value="JUSCELINO"> JUSCELINO </option>
        <option value="NÃO INFORMADO"> NÃO INFORMADO </option>
        <option value="ROCHA SOBRINHO"> ROCHA SOBRINHO </option>
        <option value="SANTA TERESINHA"> SANTA TERESINHA </option>
        <option value="SANTO ELIAS"> SANTO ELIAS </option>
        <option value="VILA EMIL"> VILA EMIL </option>
        <option value="VILA NORMA"> VILA NORMA </option>

          
      </select>
      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
      </div>
    </div>
</div>
<div class="flex flex-col">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
    Logradouro
  </label>
  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="logradouro" name="logradouro" type="text" placeholder="Rua Arthur Oliveira Vechi">
</div>
<div class="flex flex-col">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
    Número
  </label>
  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="numero" name="numero"  placeholder="120">
</div>
<div class="flex flex-col">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
    Complemento
  </label>
  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="complemento" name="complemento" type="text" placeholder="Complemento">
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6"> 
<div class="flex flex-col">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
    Telefone Fixo
  </label>
  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="telefone_1" name="telefone_1" type="text" placeholder="(99)9999-9999">
</div>
<div class="flex flex-col">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
    Telefone Celular
  </label>
  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="telefone_2" name="telefone_2" placeholder="(99)99999-9999">
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
    Área de atuação
  </label>
  <div class="relative">
    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="areas" name="areas">
      @foreach ($areas as $area)
      <option value="{{$area->id}}">{{$area->descricao}}</option>
  @endforeach
    </select>
    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
    </div>
  </div>
</div>
<div class="flex flex-col">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
    Comentário
  </label>
  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" name="comentarios" type="text" placeholder="comentario">
</div>
</div>
<div class="flex justify-center gap-6">
  <button  type="submit" class="max-w-[150px] text-center inline-block w-full py-4 px-8 leading-none text-white bg-purple-950 hover:bg-pink-900 font-semibold rounded shadow">SALVAR</button>
  <a href="/curriculos"  type="submit" class="max-w-[150px] text-center inline-block w-full py-4 px-8 leading-none text-white bg-purple-950 hover:bg-pink-900 font-semibold rounded shadow">CANCELAR</a>
</div>
</form>
</div>



@endsection