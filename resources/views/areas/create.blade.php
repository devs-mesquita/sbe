@extends('template.app')
@section('content')
<div class="container ml-auto mr-auto flex items-center">
    <form method="post" action="{{ route('areas.store')}}" class="flex-col flex flex-1 gap-8">
        {{csrf_field  ()}}
        <div class="grid grid-cols-1 md:grid-cols-1 mt-7 gap-6 text-base">
            <div class="flex flex-col">
              <label class=" tracking-wide text-gray-700 text-base  font-bold mb-2 ml-2 shadow-xs" for="grid-city">
                Área de Atuação:
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="descricao" type="text" placeholder="Ex: Serviços Gerais" name="descricao" required>
            </div>
            <div class="flex justify-center gap-6">
                <button  type="submit" class="text-white inline-flex items-center bg-indigo-500 duration-500 hover:scale-105 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-5">SALVAR</button>

</div>

@endsection