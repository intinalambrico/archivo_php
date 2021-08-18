<?php session_start(); ?>
<!doctype html>
<html lang="en">


 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
 
 
<link rel="stylesheet" type="text/css" href="file/logincss/login.css">
<head>
   <title>Login</title>
</head>
<body>
<div class="sidenav" >
         <div class="login-main-text">
            <h2>Aplicación<br> Archivo</h2>
            <p>Desarrollado por @hannilSolutions</p>
         </div>
      </div>
      <div class="main" >
         <div class="col-md-6 col-sm-12" >
            <div class="login-form">
               <form method="POST" action="" >
                  <div class="form-group">
                     <label>Nombre de usuario</label>
                     <input type="text" class="form-control" placeholder="nombre de usuario" required name="user">
                  </div>
                  <div class="form-group">
                     <label>Contraseña</label>
                     <input type="password" class="form-control" placeholder="contraseña" required name="password">
                  </div>
                  <button type="submit" class="btn btn-black">Iniciar sesión</button> 
               </form>
            </div>
         </div>
      </div>
<?php
if(isset($_POST["user"]) && isset($_POST["password"])){
    require_once("src/controllers/Login.php");
    $setLogin = new Login($_POST["user"] , $_POST["password"]);
    $setLogin->validarUsuario();
   
}

if(isset($_GET["error"]) == "user"){
        ?>
        <script type="text/javascript">
            swal({title: "Error", text: "Error de Credenciales", type: "warning", allowEscapeKey: false, confirmButtonColor: "#43ABDB"});
            </script>
        <?php
}

?>
</body>
</html>


