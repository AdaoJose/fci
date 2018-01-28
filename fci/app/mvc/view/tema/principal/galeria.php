<?php
require("classes/conect.php");
$artigo = addslashes($_GET['artigo']);
header("Content-Type: text/html; charset=ISO-8859-1",true);

$dataatual = date('Y-m-d');
session_start();
if( (!isset($_SESSION['login'])) AND (!isset($_SESSION['password'])) ) {

  header("Location: login.php");

exit;

} 


$_SESSION['modelo'];
$emails = $_SESSION['login'];

if($_SERVER['REQUEST_METHOD'] == "POST"){
   
    
  }


?>

<!DOCTYPE html>
<html lang="en">

  <head>
<?php require("analytics.php");?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <style type="text/css">
      
     @import url("http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.panel-image {
    position: relative;   
}
.panel-image img.panel-image-preview {
    width: 100%;
  border-radius: 4px 4px 0px 0px;
}

.panel-image label {
    display: block;
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 100%;
}

.panel-heading ~ .panel-image img.panel-image-preview {
  border-radius: 0px;
}

.panel-body {
   overflow: hidden;
}

.panel-image ~ input[type=checkbox] {
    position:absolute;
    top:- 30px;
    z-index: -1;   
}

.panel-image ~ input[type=checkbox] ~ .panel-body {
  height: 0px;
  padding: 0px;
}

.panel-image ~ input[type=checkbox]:checked ~ .panel-body {
    height: auto;
  padding: 15px;
}

.panel-image ~ .panel-footer a {
    padding: 0px 10px;
  font-size: 1.3em;
  color: rgb(100, 100, 100);
}


    </style>

  </head>

  <body>

    <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="img/logo_dark.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="upgrade.php">Seja Premium</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="area-do-cliente.php">Painel de cria&ccedil;&atilde;o</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="perfil.php">Editar perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galeria.php">Galeria de templates prontos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Desconectar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.php">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/about-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Galeria</h1>
              
            </div>
          </div>
        </div>
      </div>
    </header>



    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 mx-auto">
          <div class="alert alert-success">
  <strong>Galeria de templates editados!</strong> .
</div>

<div class="container" style="margin-top:10px;">
  <div class="row form-group">
<?php
$usuario = $conecta->query("SELECT * from users where email='$emails'");
  for($i=1;$i=$usuario->fetch_assoc();)
    {

      $empresa = $i['empresa'];
      $logo = $i['logo'];
      $idusuario = $i['id_usuario'];

$template = $conecta->query("SELECT * from templatepronto where id_cliente='$idusuario' order by id_arte desc");
  for($a=1;$a=$template->fetch_assoc();)
    {
      
      if($a['status'] == '0'){
        $status = '<button type="button" class="btn-sm btn btn-danger">Processando</button>';
      }elseif($a['status'] == '1'){
        $status = '<button type="button" class="btn-sm btn btn-success">Finalizada</button>';
      }


echo'<div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-image">
                '.$status.'
                    <img src="images/'.$a['imagem'].'" class="panel-image-preview" />
                    <label for="'.$a['id_arte'].'"></label>
                </div>
                <input type="checkbox" id="'.$a['id_arte'].'" class="panel-image-toggle">
                <div class="panel-body">
                    <h4>'.$a['data'].'</h4>
                    <p>'.$a['texto1'].'</p>
                    <p>'.$a['texto2'].'</p>
                </div>
                <div class="panel-footer text-center">
                    <a href="http://modig.com.br/images/'.$a['imagem'].'" download="'.$a['imagem'].'"><span class="fa fa-download"></span></a>
                    <a href="#facebook"><span class="fa fa-facebook"></span></a>
                    <a href="#twitter"><span class="fa fa-twitter"></span></a>
                    <a href="#share"><span class="fa fa-share"></span></a>
                </div>
            </div>
        </div>';
          }
      
    }
?>
  </div>

</div>
         
                

        s
        



          <!-- Pager -->
          
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Modig 2017</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
