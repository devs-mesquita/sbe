<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title ?? "Provide a \$title" }}</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-slate-800 text-white flex flex-col min-h-screen">
  <header>
    <h2 class="text-center p-3 border-b border-white/20">Header</h2>
  </header>
  <main class="flex-1 flex flex-col">@yield('content')</main>
  <footer>
    <h2 class="text-center p-1 border-t border-white/20">Footer</h2>
  </footer>
  @stack('scripts')
</body>

</html>
