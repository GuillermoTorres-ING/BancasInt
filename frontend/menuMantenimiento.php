<?php

session_start();
if(!isset($_SESSION['nivel'])){

header('location:  ../index.php');
    
}else {
    if($_SESSION['nivel']!=1){

header('location: ../index.php');

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>INICIO</title>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <meta name="description" />
  <meta name="generator" content="HAPedit 3.1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/cuerpoWeb.css" />


</head>
<header>
<?php include('../frontend/nav.php');?>
</header>

<body>
  
  <div class="container2">

    <div class="cuadrado">
      <div class="d-flex">
       
         
        <div class="w-100">
          <div id="content">
                  <section>
                    <div class="container" style="margin-left: 30%;">.
                        <div class="row">
                            <div class="col-lg-8">
                                <h2 class="font-weight-bold " style=" padding-top: 55px; padding-left: 25px">
                                    MANTENIMIENTOS GENERALES
                                </h2>
                                  <p class="lead text-muted"
                                    style="font-size:16px; padding-left: 25px; padding-bottom: 25px;">
                                    Seleccione la Actividad que desea Realizar
                                  </p>
                            </div>
                          </div>            
                      </div>
                </section>

<!--seccion -->
    <section style="margin-bottom: 40PX;display: block;margin-left: auto;margin-right: auto">
     
    <div class="container" style="margin-left: 35%;">
        <div id="container">
 
          <div class="top">
          
            <div class="opciones">
            <div class="row">
              <a href="../frontend/mantenimientoTicket.php" class="NavItem NavButton">
                <ion-icon name="book"></ion-icon> TICKETS
              </a>
            </div>
            <div class="row">
              <a href="#" class="NavItem NavButton">
                <ion-icon name="book"></ion-icon> LOTERIAS
              </a>
            </div>
              <div class="row">
              <a href="../frontend/mantenimientosUsuarios.php" class="NavItem NavButton">
                <ion-icon name="person"></ion-icon> USUARIOS
              </a>
              </div>
            </div>
     
           
            </div>
          
  <div class="top" style="margin-left:10% ;">
       <!-- COLUMNA 2-->
  <div class="opciones">
            <div class="row">
              <a href="mantenimientoTicket" class="NavItem NavButton">
                <ion-icon name="book"></ion-icon> ELEMENTO VACIO
              </a>
            </div>
            <div class="row">
              <a href="#" class="NavItem NavButton">
                <ion-icon name="book"></ion-icon> ELEMENTO VACIO
              </a>
            </div>
              <div class="row">
              <a href="#" class="NavItem NavButton">
                <ion-icon name="person"></ion-icon> ELEMENTO VACIO
              </a>
              </div>
            </div>
  </div>
          </div>
        </div>


      </div>
    </section>
<!--Seccion 2-->


          </div>
        </div>
      </div>
    </div>
  </div>
  


<!--No borrar-->
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <!--Script de iconos-->
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!--No borrar-->
</body>

<footer>
  <?php include("footer.php") ?>
</footer>
</html>