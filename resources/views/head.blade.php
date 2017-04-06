<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <style>

body{
    background:darkred !important;
    color: white !important;
}
 .bg{
 background-color: darkred;
 color: #ffffff;
 width: 100%;
 text-align: center;
 height: 100%;
}
img{
width: 30%;
}
    .navbar {
        padding-top: 8px;
        padding-bottom: 8px;
        border: 0;
        border-radius: 0;
        margin-bottom: 0;
        font-size: 12px;
        font-family: 'Exo 2', sans-serif;
        letter-spacing: 4px;
    }

    .navbar-nav li a:hover {
        color: #ffffff !important;
    }

    footer{
    font-size: 15px;
    text-align: center;

    }

.tipo1{
text-align: center;
font-family: 'Exo 2', sans-serif;
font-size: 109px;
}

.tipo2{
text-align: left;
font-family: 'Exo 2', sans-serif;
font-size: 15px;
}
.tipo3{
text-align: center;
font-family: 'Exo 2', sans-serif;
font-size: 40px;

}
.tipo4{
 text-align: center;
 font-family: 'Exo 2', sans-serif;
 font-size: 80px;

 }



 </style>


        <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>
<nav class="navbar navbar-inverse" style="background-color: #000000; border-color: #000;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('menu')}}">Rabelo's</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href={{ url('cadastro') }}>Cadastrar Produto<span class="sr-only">(current)</span></a></li>
        <li><a href="{{ url('venda') }}">Venda</a></li>
        <li><a href="{{ url('relatorio') }}">Relatório</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('login') }}"> Sair</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
