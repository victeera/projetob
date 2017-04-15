<!doctype html>
<html lang="en">
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

 </style>
<body>

       <div class="container-fluid bg">
        <p class=" tipo1"> Rabelo's Bar <img src="img/copo.png"></p>
        <p class="tipo3">Relátorio de produtos cadastrados </p>
        <table class="table table-bordered tb">
        <tr>
        <td>Produto</td>
        <td>Quantidade </td>
        <td>Valor</td>
        <td>Data de cadastro</td>
        <td>Data de alteração</td>

        </tr>
                @foreach($produtos as $produto)
                @if($datacad = strtotime($produto->created_at))
                @if($dataatt = strtotime($produto->updated_at))
        <tr>
        <td>{{ $produto->name }}</td>
        <td>{{ $produto->quantidade }}</td>
        <td> <?php $valor=str_replace(".",",", $produto->preco); echo ('R$ ' . $valor); ?></td>
        <td>{{ $datacr =  strftime("%A, %d de %B de %Y", $datacad) }}</td>
        <td>{{ $dataup = strftime("%A, %d de %B de %Y", $dataatt) }}</td>
        </tr>

                @endif
                @endif
                @endforeach

        </table>


</div>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>