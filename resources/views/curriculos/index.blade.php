@extends('template.app')
@section('content')


<link rel="stylesheet" href="{{asset('css/dataTables.css')}}">
    
<style>
  .quadrado-com-blur {
      position: absolute;
      top: 0;
      left: 0;
      width: 30%;
      height: 80%;
      background-color: rgba(7, 17, 160, 0.801);
      filter: blur(200px);
  }

  .container {
      position: relative;
  }

  .datatable-container {
      position: relative;
      z-index: 1;
  }
</style>

<body class="bg-gray-700 text-white tracking-wider leading-normal">
  <div class="container relative">
      <div class="quadrado-com-blur"></div>

      <div class="flex justify-end">
          <a href="{{ route('curriculos.create') }}" type="button" class="text-white bg-gradient-to-r from-blue-900 to-indigo-950 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ml-auto">Cadastrar Currículos</a>
      </div>

      <div class="datatable-container">
          <div class="container mx-auto flex items-center justify-around text">
              <div class="container mx-auto flex items-center justify-center">
                  <!--Card-->
                  <div id='recipients' class="p-6 mt-6 lg:mt-0 rounded shadow bg-gray-900 w-full">
                      <div class="overflow-x-auto">
                          <table id="example" class="stripe hover w-full text-sm md:text-base lg:text-lg" style="padding-top: 1em; padding-bottom: 1em;">
                              <thead>
                                  <tr>
                                      <th data-priority="1">Criado em</th>
                                      <th data-priority="2">Atualizado em</th>
                                      <th data-priority="3">Nome</th>
                                      <th data-priority="4">Idade</th>
                                      <th data-priority="5">Sexo</th>
                                      <th data-priority="6">Bairro</th>
                                      <th data-priority="7">Escolaridade</th>
                                      
                                      <th data-priority="9">Área de Atuação</th>
                                      <th data-priority="10">Raça</th>
                                      <th data-priority="11">PCD</th>
                                      <th data-priority="1">Ações</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($curriculos as $curriculo) 
                                <tr>
                                      <td>{{$curriculo->created_at->format('d/m/Y') }}</td>
                                      <td>{{$curriculo->updated_at->format('d/m/Y') }}</td>
                                      <td>{{$curriculo->nome}}</td>
                                      <td>A FAZER</td>
                                      <td>{{$curriculo->sexo}}</td>
                                      <td>{{$curriculo->bairro}}</td>
                                      <td>{{$curriculo->escolaridade}}</td>
                                      <td>AREA</td>
                                      <td>{{$curriculo->raca}}</td>
                                      <td>{{$curriculo->pcd}}</td>
                                      <td>A FAZER</td>
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