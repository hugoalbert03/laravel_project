<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ env("APP_NAME") }}</title>
</head>
<body>
	 <div id="container">
		 <header>
		 	<h1>Meu site</h1>
		 </header>
		 <nav>
		 	<h3>[Menu 1] [Menu 2]</h3>
		 </nav>
		 <div>
		 	@yield('content')
		 </div>
		 <footer>
		 	<small>&copy;</small>
		 </footer>
	 </div>
</body>
</html