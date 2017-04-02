<!DOCTYPE html>
<html>
   @include('head')
   <title>Cadastro</title>

        <div class="container-fluid bg">

                <p class="tipo2">Operador: {{ $users->name }}</p>
                <p class=" tipo3">Cadastro de Produto</p>


                <form class="text-left" action="{{url("menu")}}" method="post">
                   {{ csrf_field() }}
                    <div class="col-sm-5">
                    <div class="form-group">
                        Nome do Produto <input type="text" name="name"  class="form-control"  placeholder="Ex: Skol">
                    </div>
                    <div class="form-group">
                       Quantidade <input type="text" name="quantidade" class="form-control" placeholder="ex: 00">
                    </div>
                     <div class="form-group">
                       Preço Unidade<input type="text" name="precount" class="form-control" placeholder="ex: R$ 00,00">
                     </div>
                     <div class="form-group">
                       Preço Balde<input type="text" name="precobalde" class="form-control" placeholder="ex: R$ 00,00">
                     </div>
                     <div class="form-group">
                        Tipo <input type="text" name="tipo" class="form-control" placeholder="ex: Cerveja">
                     </div>
                     <div class="form-group">
                     <div class="col-md-offset-5">
                    <button type="submit" class="btn btn-primary">Cadastrar</button><br>
                    </div>
                    </div>
</div>
                </form>
                <div class="col-md-offset-1"><img src="img/copo.png">
</div>
        </div>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<footer> <b>&copy; Victeera's Developer</b></footer>
    </body>
</html>
