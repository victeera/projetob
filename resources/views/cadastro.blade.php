<!DOCTYPE html>
<html>
   @include('head')
   <title>Cadastro</title>

        <div class="container-fluid bg">

                <p class="tipo2">Operador: {{ $users->name or " " }}</p>
                <p class=" tipo3">Cadastro de Produto</p>

                @if(Session::has('msg'))
                {{ Session::get("msg") }}
                @endif

                <form class="text-left" action="{{url("vcadastro")}}" method="post">
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

                    {{ csrf_field() }}
                    <div class="col-sm-5">
                    <div class="form-group">
                        Nome do Produto <input type="text" name="name"  class="form-control"  placeholder="Ex: Skol" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                       Quantidade em unidades <input type="text" name="quantidade" class="form-control" placeholder="ex: 00" value="{{ old('quantidade') }}">
                    </div>
                     <div class="form-group">
                       Preço Unidade<input type="text" name="precount" class="form-control" placeholder="ex: R$ 00,00" value="{{ old('precount') }}">
                     </div>
                     <div class="form-group">
                       Preço Balde<input type="text" name="precobalde" class="form-control" placeholder="ex: R$ 00,00" value="{{ old('precobalde') }}">
                     </div>
                     <div class="form-group">
                        Tipo <input type="text" name="tipo" class="form-control" placeholder="ex: Cerveja" value="{{ old('tipo') }}">
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
        </div><br>

        <script src="https://code.jquery.com/ui/1.12.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<footer> <b>&copy; Victeera's Developer</b></footer>
    </body>
</html>

