@extends('template.app')
@section('content')


<link rel="stylesheet" href="{{asset('css/dataTables.css')}}">
    
<style>
  .quadrado-com-blur {
      position: absolute;
      top: 0;
      left: 0;
      width: 30%;
      height: 30%;
      background-color: rgba(7, 22, 161, 0.562);
      filter: blur(100px);
  }

  .container {
      position: relative;
  }

  .datatable-container {
      position: relative;
      z-index: 1;
  }
</style>

<body class="bg-slate-300 text-white tracking-wider leading-normal">

      {{-- <div class="quadrado-com-blur"></div> --}}

                    <div class="flex justify-end object-right ">
    

                            <a href="{{ route('curriculos.create') }}" type="button" class="text-white inline-flex items-center bg-indigo-500 duration-500 hover:scale-105 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-5">
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                  </svg> 
                                  Encaminhar Currículo
                                   
                              </a>
                          
      
          <a href="{{ route('curriculos.create') }}" type="button" class="text-white bg-indigo-500  hover:scale-105 duration-500 font-medium rounded-lg text-sm px-5 py-2.5  text-center me-2 mb-5 ">Cadastrar Currículos</a>
      </div>
    
    
    <div class="container relative">
      <div class="datatable-container h-5">
          <div class="container mx-auto flex items-center justify-around text">
              <div class="container  flex text-sm items-center justify-center">
                  <!--Card-->
                  <div id='recipients' class="p-6 mt-1 lg:mt-0 rounded shadow bg-gradient-to-r from-indigo-950 to-indigo-900 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 w-full">
                      <div class="overflow-x-auto">
                          <table id="example" class="stripe hover w-full text-xs md:text-xs lg:text-xs" style="padding-top: 1em; padding-bottom: 1em;">
                              <thead>
                                  <tr>
                                      <th data-priority="1" class="text-sm">Criado em</th>
                                      <th data-priority="2" class="text-sm">Atualizado em</th>
                                      <th data-priority="3" class="text-sm">Nome</th>
                                      <th data-priority="4" class="text-sm">Idade</th>
                                      <th data-priority="5" class="text-sm">Sexo</th>
                                      <th data-priority="6" class="text-sm">Bairro</th>
                                      <th data-priority="7" class="text-sm">Escolaridade</th>
                                      
                                      <th data-priority="9" class="text-sm">Área de Atuação</th>
                                      <th data-priority="10" class="text-sm">Raça</th>
                                      <th data-priority="11" class="text-sm">PCD</th>
                                      <th data-priority="12" class="text-sm">Ações</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($curriculos as $curriculo) 
                                <tr>
                                      <td class="text-sm">{{$curriculo->created_at->format('d/m/Y') }}</td>
                                      <td class="text-sm">{{$curriculo->updated_at->format('d/m/Y') }}</td>
                                      <td class="text-sm">{{$curriculo->nome}}</td>
                                      <td class="text-sm">A FAZER</td>
                                      <td class="text-sm">{{$curriculo->sexo}}</td>
                                      <td class="text-sm">{{$curriculo->bairro}}</td>
                                      <td class="text-sm">{{$curriculo->escolaridade}}</td>
                                      <td class="text-sm">AREA</td>
                                      <td class="text-sm">{{$curriculo->raca}}</td>
                                      <td class="text-sm">{{$curriculo->pcd}}</td>
                                      
                                      <td class="px-10 py-10 align-middle">
                                        <label class="inline-flex items-center ">
                                            <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                                           
                                          </label>
                                        
                                        <a href="#" class="inline-block text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-300" 
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                          </svg>
                                          
                                        
                                        <a href="#" class="inline-block text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-300"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                          </svg>
                                          
                                        
                                        
                                        <a href="#" class="inline-block text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-300"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                              </svg>

                                        <a href="#" class="inline-block text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-300"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                         

                                                  
                                            </td>
                                     @endforeach
                                  </tr>
                                  <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
                                  {{-- <tr>
                                      <td>Donna Snider</td>
                                      <td>Customer Support</td>
                                      <td>New York</td>
                                      <td>27</td>
                                      <td>2011/01/25</td>
                                      <td>$112,000</td>
                                      <td>$320,800</td>
                                      <td>$320,800</td>
                                      <td>$320,800</td>
                                      <td>$320,800</td>
                                      <td>$320,800</td>
                                      
                                  </tr> --}}
                              </tbody>
                            </table>
            
                        </div>
                    </div>
                    <!--/Card-->
                </div>
          </div>
      </div>
  </div>
</div>
</body>

    
      @endsection
   
  
  
      @push('scripts')
      <!-- jQuery -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

      <!--Datatables -->
      <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
      <script src="//cdn.datatables.net/1.13.7/js/dataTables.tailwindcss.min.js"></script>
  
      <script>
        $(document).ready(function() {
        
          var table = $('#example').DataTable({
              responsive: true
            })
            .columns.adjust()
            .responsive.recalc();
        });
      </script>
    @endpush