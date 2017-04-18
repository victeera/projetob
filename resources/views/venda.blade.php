<!DOCTYPE html>
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

   <title>Vendas</title>


<body>
   @include('head')
        <div class="container-fluid bg">
                <p class="tipo2">Operador: {{ $users->name }}</p>
                <p class=" tipo4">Venda</p>
                <form class="text-left" action="{{url("finalizado")}}" method="post">
                   {{ csrf_field() }}

                    <div class="col-sm-5">

  @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
<select class="form-control" size="1" name="name">

@if(isset($vendas)))
<option selected value="">Selecione o produto</option>
    @foreach($vendas as $venda)
    @if($venda->quantidade > 0)
        <option name="name" value="{{ $venda->name }}"> {{ $venda->name }}</option>
   @endif
    @endforeach
 @else

<option selected value="">Não há produtos em estoque</option>
@endif
</select>
<br>

<div class="form-group">
          @if(Session::has('msg'))
                {{ Session::get("msg") }}
                @endif
             <div class="col-sm-14">
               <input type="text" class="form-control" name="quantidade" placeholder="Quantidade" value="{{ old('quantidade') }}">
             </div>
</div>
<select class="form-control" size="1" name="tipo">

<option selected value="">Selecione o tipo</option>

            <option name="tipo" value="Cerveja"> Cerveja</option>
            <option name="tipo" value="Refrigerante"> Refrigerante</option>
            <option name="tipo" value=Água"> Água</option>
            <option name="tipo" value=Ice"> Ice</option>

</select>
<br>
                     <div class="form-group">
                     <div class="col-md-offset-5">
                    <button type="submit" class="btn btn-primary">Finalizar</button><br>
                    </div>
                    </div>

</div>
                <div><img src="img/copo.png"></div>

</form>
        </div><br>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<footer> <b>&copy; Victeera's Developer</b></footer>
    </body>
</html>
