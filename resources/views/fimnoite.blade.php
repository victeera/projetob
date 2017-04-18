<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<title>Relatório de Produtos</title>

 <style>
body{
    color: black !important;
}
.tb{
    background-color: #f5f5f5;
    color: black;
    font-family: 'Exo 2', sans-serif;
    font-size: 15px;

}
.tipo1{
text-align: center;
font-family: 'Exo 2', sans-serif;
font-size: 109px;
}
img{
width: 20%;
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

 .tipo5{
 text-align: right;
 font-family: 'Exo 2', sans-serif;
 font-size: 20px;
 }

 </style>
<body>

       <div class="container-fluid bg">
       <p class="tipo2">{{date("d/m/Y")}}</p>
        <p class=" tipo1"> Rabelo's Bar <img src="{{public_path('img/copo.png')}}"></p>
        <p class="tipo3">Relátorio de final de noite </p>

        <table class="table table-bordered tb">
        <tr>
        <td>Quantidade de produtos vendidos</td>
        <td>Valor das vendas</td>
        <td>Valor garçom</td>
        <td>Valor cantor</td>
        <td>Valor auxiliar</td>

        </tr>

        <tr>
        <td>{{ $quantidadeC }}</td>
        <td> <?php $total=str_replace(".",",", $valor); echo ('R$ ' . $total); ?></td>
        <td>R$ 100,00</td>
        <td>R$ 350,00</td>
        <td>R$ 80,00</td>
        </tr>
        </table>
        @if($liquido = $total - 350 - 100 - 80)
                <p class="tipo5">Valor liquido R$ {{$liquido}}</p>
                @endif
</div>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>