<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Error</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <meta name="description" />
    <meta name="generator" content="HAPedit 3.1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/cuerpoWeb.css" />
    <link rel="stylesheet" href="/css/ventas.css" />

</head>
<header>
    <div class="nav">
        <div class="logoDiv">
            <a class="navbar-logo" href="#">
                <img class="logo" src="/img/Logo.png" />
            </a>

        </div>

    </div>
</header>

<body>

    <div class="container2">

        <div class="cuadrado" style="display: flex;align-items: center;justify-content: center; ">
            <div class="cuadrais" style=" ">

                <center>
                <h3 class="font-weight-bold " style=" padding: 30px; color:red"><ion-icon name="warning-outline"></ion-icon>
                       ERROR <ion-icon name="warning-outline"> </h3>
                    <h4 class="font-weight-bold " style=" padding-left: 55px; padding-right: 55px; ">
                        EL USUARIO NO SE HA PODIDO ENCONTRAR </h4>
                    <p style="padding-left: 55px; padding-right: 55px; text-align: justify; ">Lamentamos las molestias que esto pueda causar, pero el usuario y/o la contraseña introducida no se han podido encontrar,
                        porfavor intente de nuevo.</p>
                    
                    <form action="../index.php">
                         <input  class="botoncito" type="submit" name="submit" class="btn btn-primary btn-block"
                             value="Volver" >
                    </form>
                   
                    <small  class="small">SI EL PROBLEMA PERSISTE PORFAVOR CREE UN <a class=" small t" href="#">TICKET</a></small>
                    <br>
                    <small  class="small">Aun no tiene una cuenta?:
                     <a class=" small t" href="#">REGISTRASE</a></small>
                </center>
            </div>
        </div>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<footer>
    <?php include("footer.php") ?>
</footer>

</html>