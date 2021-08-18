<?php
 

?>
<!doctype html>
<html lang="en">


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style type="text/css">
.modal-contenido{
  background-color:white;
  width:300px;
  padding: 10px 20px;
  margin: 20% auto;
  position: relative;
}
.modal-personalizado{
  background-color: rgba(0,0,0,.8);
  position:fixed;
  top:0;
  right:0;
  bottom:0;
  left:0;  
}
</style>



    <title>IntArchivo</title>
  </head>
<body style="background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%)">
    <?php 
      require_once("src/view/_nav.php");

?>

<div class="container"></br>
    <?php 
    
    require_once("src/view/search.php");
    
    ?>
   

            <div id="modalArchivo" style="display: none">
                <div   class="modal-personalizado" >
                  <div class="modal-contenido">
                    
                    <img src="https://www.boasnotas.com/img/loading2.gif" />
                  </div>  
                </div>
            </div>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  
</html>