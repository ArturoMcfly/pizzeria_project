<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="../css/freelancer.min.css" rel="stylesheet">
    <link href="../icomoon/fonts/style.css" rel="stylesheet">
    <style>
        body{
            background:url(../img/pizzas/pizzafondo.jpg);
            background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
        }
        .footer {
            
        }
        h1{
            margin-top:100px;
            color:#fff;
            background:#0000009b;
            width:220px;
            text-align:center;
            margin:10px;
            border-radius:6px;
        }
        .table{
            color:#fff;
            background:#001DAD9b;
        }
    </style>
</head>
<body id="page-top">
    <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="icon-spoon-knife"></span>
                PIZZERIA HIELO FRITO
            <span class="icon-spoon-knife"></span>
      </a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../index.php">Salir&nbsp;<span class="icon-exit"></span></a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
    <?php
        include ("conexion.php");
        $nombre=$_POST['nombre'];
        $domicilio=$_POST['domicilio'];
        $colonia=$_POST['colonia'];
        $municipio=$_POST['Municipio'];
        $referenca=$_POST['referencia'];
        $paquete=$_POST['paquete'];
        $ingredientes=$_POST['ingredientes'];
        $tipo=$_POST['tipo'];
        $query1="INSERT INTO compra ( `nombre`, `direccion`, `colonia`, `municipio`, `referencia`, `paquete`, `ingredientes`, `tipo`) VALUES ( '$nombre', '$domicilio', '$colonia','$municipio','$referenca','$paquete','$ingredientes','$tipo')";
        $resultado1=$mysqli->query($query1);
        if($resultado1){
            echo("<h1>Pedido realizado con exito</h1>");
        }else{
            echo("<h1>no se pudo realizar compra</h1>");
        }
        $query="SELECT * FROM compra";
        $resultado=$mysqli->query($query);
  
    ?>
    <h1>Pedidos</h1>
    <table class="table" style="background:#">
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Domicilio
            </th>
            <th>
                Colonia
            </th>
            <th>
                Municipio
            </th>
            <th>
                Referencia
            </th>
            <th>
                Paquete
            </th>
            <th>
                Ingredientes
            </th>
            <th>
                Tipo de pago
            </th>
        </tr>
        <?php
            $resultado=$mysqli->query($query);
            if($resultado->num_rows > 0){
                while($fila=$resultado->fetch_assoc()){
        ?>
        <tr>
            <th>
                <?php
                echo ($fila['nombre']);
                ?>
            </th>
            <th>
                <?php
                echo ($fila['direccion']);
                ?>
            </th>
            <th>
                <?php
                echo ($fila['colonia']);
                ?>
            </th>
            <th>
                <?php
                echo ($fila['municipio']);
                ?>
            </th>
            <th>
                <?php
                echo ($fila['referencia']);
                ?>
            </th>
            <th>
                <?php
                echo ($fila['paquete']);
                ?>
            </th>
            <th>
                <?php
                echo ($fila['ingredientes']);
                ?>
            </th>
            <th>
                <?php
                echo ($fila['tipo']);
                ?>
            </th>
            
        </tr>
        <?php
                }
            }
        ?>
    </table>
    <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Direccion</h4>
          <p class="lead mb-0">2215 John Daniel Drive
            <br>Clark, MO 65243</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Redes Sociales</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Sobre Hielo frito</h4>
          <p class="lead mb-0">Es un sitio genial
            <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
        </div>

      </div>
    </div>
  </footer>
    <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="../js/jqBootstrapValidation.js"></script>
  <script src="../js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/freelancer.min.js"></script>
</body>
</html>


