<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    </head>
    <body>

    <br><br>
    <br><br>
    <br><br>

        <div class="container-fluid">
                @if(Session::has("msgerro"))

                            <div class="alert alert-danger">
                                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                   <strong>Erro!</strong>  {{ Session::get('msgerro')}}
                               </div>
                           @endif
                <form class="text-left" action="{{url("auth")}}" method="post">
                   {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" name="email"  class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>

        </div>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>
