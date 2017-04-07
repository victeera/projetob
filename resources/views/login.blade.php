<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

<style>

.container-fluid{

margin-top: 100px;

}
.tipo1{

font-size: 20px;
text-align: center;
}

</style>


    </head>
    <body>

    <br><br>
    <br><br>
    <br><br>

       <div class="container-fluid">
       <p class="tipo1">SisBar</p>
         <form class="form-horizontal" method="post" action="{{ url('auth') }}">
               {{ csrf_field() }}
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
             <div class="col-sm-offset-3">
             <div class="form-group">
             <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
             <div class="col-sm-3">
               <input type="text" class="form-control" name="email" id="inputEmail3" placeholder="Email" value="{{ old('email') }}">
             </div>
           </div>
           <div class="form-group">
             <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
             <div class="col-sm-3">
               <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Senha" value="{{ old('password') }}">
             </div>
           </div>
           </div>
           <div class="form-group">
             <div class="col-sm-offset-4 col-sm-10">
               <div class="checkbox">
                 <label>
                   <input type="checkbox"> Lembrar-me
                 </label>
               </div>
             </div>
           </div>

           <div class="form-group">
             <div class="col-sm-offset-5 col-sm-10">
               <button type="submit" class="btn btn-success">Entrar</button>
             </div>
           </div>
         </form>
       </div>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>
