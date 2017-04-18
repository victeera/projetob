<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

<style>

.tipo1{

font-size: 20px;
text-align: center;
}
body{
    background-color: darkred;
    color: #000000;
}
img{
width: 50%;
margin: auto;
}
.form-signin{
    max-width: 420px;
    padding: 30px 38px 66px;
    margin-left: 350px;
    border: 1px solid #cccccc;
    background-color: #ffffff;
    margin-top: -80px;
}
.input-group{
    height: 45px;
    margin-bottom: 15px;
    border-radius: 0px;
    color: darkred;
}
.form-control{
    height: 45px;
    color: darkred;
}
.input-group:hover span i{
    color: darkred;
}
.btn-block{
    border-radius: 0px;
    margin-top: 25px;
    background-color: darkred;
    border: none;
}
.bol{
    position: relative;
    margin-top: -40px;
    color: darkred;
}
footer{
    text-align: center;
    margin-top: 40px;

}

</style>


    </head>
    <body>

    <br><br>
    <br><br>
    <br><br>

<div class = "container">
    <div class="wrapper">
         <form method="post" action="{{ url('auth') }}" class="form-signin">
               {{ csrf_field() }}
               <div class="row text-center bol"><i class="glyphicon glyphicon-certificate"></i></div>
            <h3 class="form-signin-heading text-center">
    <p>SisBar</p>
                <img src="img/copo.png" alt="" class="img-responsive">
            </h3>
            <hr class="spartan">
            <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon1">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                <input type="text" class="form-control" name="email" placeholder="Usuário" required="" autofocus="" value="{{ old('email') }}" />
            </div>
            <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon1">
                            <i class="glyphicon glyphicon-lock"></i>
                        </span>
                <input type="password" class="form-control" name="password" placeholder="Senha" value="{{ old('password') }}" required=""/>
            </div>
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

                         @if (Session::has('loginErro'))
                             <div class="alert alert-danger">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                 <ul>
                                     <li>{{ Session::get('loginErro') }}</li>
                                 </ul>
                             </div>
                         @endif
            <div class="col-sm-offset-4 col-sm-10">
                           <div class="checkbox">
                             <label>
                               <input type="checkbox"> Lembrar-me
                             </label>
                           </div>
                         </div>
            <button class="btn btn-lg btn-primary btn-block"  name="submit" value="Entrar" type="Submit">Entrar</button>
        </form>
    </div>
<footer>
    Victeera's Developer 2017 &copy; - Todos os direitos reservados
    </footer>
</div>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    </body>
</html>
