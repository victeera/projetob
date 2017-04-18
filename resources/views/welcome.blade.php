<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    </head>
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
text-align: right;
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

    <body>
       <div class="container-fluid bg">
        <p class="tipo2"> Data: {{ $data = date('d/m/Y') }}</p>
        <p class=" tipo1"> Rabelo's Bar <img src="{{public_path('img/copo.jpg')}}"></p>
        <p class="tipo3">Relátorio da noite </p>


Total arrecadado da noite:{{ ($venda)}}

        <table class="table table-bordered tb">
        <tr>
        <td>Valor de vendas da noite</td>
        <td>Cervejas vendidas</td>
        <td>Valor</td>
        <td>Data da venda</td>

        </tr>

        <tr>
        <td>{{ $total}}</td>
        <td>{{ $quantidadeC}}</td>
        </tr>

        </table>


</div>


        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>
