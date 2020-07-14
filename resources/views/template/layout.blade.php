<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"  style="margin-bottom: 40px;">
      <a class="navbar-brand" href="{{route('home')}}">matheus.lima</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item @if(request()->is('products*')) active @endif">
              <a class="nav-link" href="{{route('products.index')}}">Produtos</a>
            </li>
            <li class="nav-item @if(request()->is('providers*')) active @endif">
              <a class="nav-link" href="{{route('providers.index')}}">Fornecedores</a>
            </li>
          
        </div>
      </nav>
    <div class="container">
        @yield('content') <!-- chamar conteudo da section das heranças -->
    </div>
  
</body>
</html>