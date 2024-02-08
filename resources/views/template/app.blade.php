<!DOCTYPE html>
<html class="dark" lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta charset="UTF-8">
		<script src="https://cdn.tailwindcss.com"></script>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">  
	<!--Responsive Extension Datatables CSS-->
		<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
			<title>Balcão de Empregos</title>
 	<head>
	<body>
		@include('template.components.sidebar')
		<div class="p-4 sm:ml-64">
			<div class=" border-black border-dashed rounded-lg dark:border-gray-700 mt-14">
				@yield('content')
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
		
		@stack('scripts')
	</body>
</html>