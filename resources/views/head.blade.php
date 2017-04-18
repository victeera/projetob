 <style>
body{
    background:darkred !important;
    color: white !important;
}
.tb{
    background-color: #f5f5f5;
    color: black;
    font-family: 'Exo 2', sans-serif;
    font-size: 15px;

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
        padding-top: 14px;
        padding-bottom: 14px;
        border: 0;
        border-radius: 0;
        margin-bottom: 0;
        font-size: 12px;
        font-family: 'Exo 2', sans-serif;
        letter-spacing: 5px;

    }

    .navbar-nav li a:hover {
        color: darkred !important;
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
 .date{
text-align: right;
font-family: 'Exo 2', sans-serif;
font-size: 15px;

 }
 </style>

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
        <li><a href={{ url('cadastro') }}>Cadastrar Produto<span class="sr-only"></span></a></li>
        <li><a href="{{ url('venda') }}">Venda</a></li>
         <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultar<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ url('consulta.produto') }}">Produtos Cadastrados</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ url('consulta.venda') }}">Vendas Realizadas</a></li>
                  </ul>
                </li>
         <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatórios<span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="{{ url('relatorio.produto') }}">Relatório de Produtos</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ url('relatorio.venda') }}">Relatório de Vendas</a></li>
                                  <li role="separator" class="divider"></li>
                                    <li><a href="{{ url('relatorio.fechamento') }}">Finaalizar Noite</a></li>

                                  </ul>
                                </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('login') }}"> Sair</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>