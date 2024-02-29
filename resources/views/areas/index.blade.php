@extends('template.app')
@section('content')
  

<link rel="stylesheet" href="{{asset('css/dataTables.css')}}">

<div class="flex justify-end object-right ">
    

  <a href="{{ route('areas.create') }}" type="button" class="text-white inline-flex items-center bg-indigo-500 duration-500 hover:scale-105 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-5">
     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 ">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
        </svg> 
        Cadastrar Área
         
    </a>
  </div>

<div class="container relative">
  <div class="datatable-container h-1">
      <div class="container text-white mx-auto flex items-center justify-around text">
          <div class="container  flex text-sm items-center justify-center">
              <!--Card-->
              <div id='recipients' class="p-6 mt-1 lg:mt-0 rounded shadow bg-gradient-to-r from-indigo-950 to-indigo-900 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 w-full">
                  <div class="overflow-x-auto">
                      <table id="sbe" class="stripe hover text-white w-full text-xs md:text-xs lg:text-xs" style="padding-top: 1em; padding-bottom: 1em;">
                          <thead>
                              <tr>
                                 
                                  
                                  <th data-priority="1" class="text-sm">Área de Atuação Cadastradas</th>
                                 <th data-priority="2" class="text-sm">Ações</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($areas as $area) 
                            
                            <tr>
                                  <td class="text-sm">{{$area->descricao}}</td>
                                  <td>
                                    <a class="inline-block text-center" id="btn_exclui_area" href="#"
                                      data-excluir='{{$area->id}}'
                                      title="Excluir">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-300"
                                          fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                      </svg>
                                    </form>
                                    </td>
                                  {{-- </td> --}}
                            </tr>
                            @endforeach

                                  
@endsection
@push('scripts')
<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.13.7/js/dataTables.tailwindcss.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $(document).ready(function() {
  
    var table = $('#sbe').DataTable({
        responsive: true
      })
      .columns.adjust()
      .responsive.recalc();
  });
</script>
<script>
  $("table#sbe").on("click", "#btn_exclui_area" ,function(){
  let id = $(this).data('excluir');
     // console.log(id);
     let btn = $(this);
        Swal.fire({
                    title: 'Você tem certeza que deseja excluir a Area de atuação?',
                    text: "Você não poderá reverter isso!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, exclua isso!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        console.log(id);
                        $.post("{{ url('/areas')}}/" + id, {
                            id: id,
                            _method: "DELETE",
                            _token:"{{csrf_token()}}"
                            }).done(function() {
                                location.reload();
                            });
                    }
                 })             
                });
                </script> 

@endpush