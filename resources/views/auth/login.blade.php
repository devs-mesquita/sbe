<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<div class="min-h-screen bg-white flex">
  <div class="hidden lg:block relative w-0 flex-1 bg-gray-900">
    <div class="flex h-full justify-center items-center">
      <img class="w-2/4	" src="img/brasao.png" alt="">
    </div>  
  </div>
  <div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl-px-24">
    <div class="mx-auto w-full max-w-sm">
      <div>
        <img src="img/brasao.png" alt="" class="lg:hidden h-20 w-auto">
        <h2 class="mt-6 text-3x1 font-semibold text-purple-950">Entrar</h2>
       
        
      </div>
     <div class="mt-6">
      <form role="form" method="POST" action="{{ route('entrar') }}">
        @csrf
        @method('post')
        <div class="mb-4">
          <input id="email" type="email" name="email" placeholder="E-mail" class="apperance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus: outline-none{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  required >        
        </div>
        <div class="mb-4">
          <input id="password" type="password" name="password" placeholder="Senha" class="apperance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus: outline-none {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="off">
        </div>
        <div class="mb-4">
          <button  type="submit" class="inline-block w-full py-4 px-8 leading-none text-white bg-purple-950 hover:bg-pink-900 font-semibold rounded shadow">Entrar</button>
         </div>
      </form>
      {{-- <form method="POST" action="{{ route('login.perform') }}">
        @csrf
        @method('post')
        <div class="mb-4">
          <input id="email" type="text" name="email" placeholder="E-mail" class="apperance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus: outline-none{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  required >
        </div>
        <div class="mb-4">
          <input id="password" type="password" name="password" placeholder="Senha" class="apperance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus: outline-none {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="off">
        </div>
        <div class="mb-4">
         <button  type="submit" class="inline-block w-full py-4 px-8 leading-none text-white bg-purple-950 hover:bg-pink-900 font-semibold rounded shadow">Entrar</button>
        </div>
        <div class="mb-4">
          <p>
           <a href="#" class="text-purple-950"> Esqueceu sua senha?</a>
          </p>
        </div>
     </div> 
    </form>  --}}
    </div>   
</div>
</div>
</body>
</html>