<!DOCTYPE html>
<html>
   @include('head')
   <title>Vendas</title>

        <div class="container-fluid bg">
                @if(Session::has('users'))
                <p class="tipo2">Operador: {{ Session::get("users") }}</p>
                <p class=" tipo4">Venda</p>
@endif
                <form class="text-left" action="{{url("menu")}}" method="post">
                   {{ csrf_field() }}
                    <div class="col-sm-5">

<select class="form-control" size="1" name="name">

<option selected value="Selecione">Selecione o produto</option>
@foreach($vendas as $venda)
<option value="{{ $venda->name }}">{{ $venda->name }}</option>
@endforeach
</select>
<br>

<div class="form-group">
             <div class="col-sm-14">
               <input type="text" class="form-control" name="quantidade" placeholder="Quantidade" value="{{ old('quantidade') }}">
             </div>
           </div>

<br>
                     <div class="form-group">
                     <div class="col-md-offset-5">
                    <button type="submit" class="btn btn-primary">Finalizar</button><br>
                    </div>
                    </div>
</div>
                </form>
                <div class="col-md-offset-1"><img src="img/copo.png">
</div>
        </div><br>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<footer> <b>&copy; Victeera's Developer</b></footer>
    </body>
</html>
