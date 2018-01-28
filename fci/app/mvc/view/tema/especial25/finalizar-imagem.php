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
   
$modelo = $_POST['radio'];
    
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
      
      .funkyradio div {
  clear: both;
  overflow: hidden;
}

.funkyradio label {
  width: 100%;
  border-radius: 3px;
  border: 1px solid #D1D3D4;
  font-weight: normal;
}

.funkyradio input[type="radio"]:empty,
.funkyradio input[type="checkbox"]:empty {
  display: none;
}

.funkyradio input[type="radio"]:empty ~ label,
.funkyradio input[type="checkbox"]:empty ~ label {
  position: relative;
  line-height: 2.5em;
  text-indent: 3.25em;
  margin-top: 2em;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.funkyradio input[type="radio"]:empty ~ label:before,
.funkyradio input[type="checkbox"]:empty ~ label:before {
  position: absolute;
  display: block;
  top: 0;
  bottom: 0;
  left: 0;
  content: '';
  width: 2.5em;
  background: #D1D3D4;
  border-radius: 3px 0 0 3px;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label,
.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label {
  color: #888;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label:before,
.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label:before {
  content: '\2714';
  text-indent: .9em;
  color: #C2C2C2;
}

.funkyradio input[type="radio"]:checked ~ label,
.funkyradio input[type="checkbox"]:checked ~ label {
  color: #777;
}

.funkyradio input[type="radio"]:checked ~ label:before,
.funkyradio input[type="checkbox"]:checked ~ label:before {
  content: '\2714';
  text-indent: .9em;
  color: #333;
  background-color: #ccc;
}

.funkyradio input[type="radio"]:focus ~ label:before,
.funkyradio input[type="checkbox"]:focus ~ label:before {
  box-shadow: 0 0 0 3px #999;
}

.funkyradio-default input[type="radio"]:checked ~ label:before,
.funkyradio-default input[type="checkbox"]:checked ~ label:before {
  color: #333;
  background-color: #ccc;
}

.funkyradio-primary input[type="radio"]:checked ~ label:before,
.funkyradio-primary input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #337ab7;
}

.funkyradio-success input[type="radio"]:checked ~ label:before,
.funkyradio-success input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #5cb85c;
}

.funkyradio-danger input[type="radio"]:checked ~ label:before,
.funkyradio-danger input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #d9534f;
}

.funkyradio-warning input[type="radio"]:checked ~ label:before,
.funkyradio-warning input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #f0ad4e;
}

.funkyradio-info input[type="radio"]:checked ~ label:before,
.funkyradio-info input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #5bc0de;
}
    </style>

  </head>

  <body>

    <!-- Navigation -->
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
              
              <span class="subheading">SEJA VOC&Ecirc; O ARTISTA</span>
            </div>
          </div>
        </div>
      </div>
    </header>



    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 mx-auto">
          <?php 

          ?>
          <div class="alert alert-success">
  <strong>EDITE SUA IMAGEM!</strong> .
</div>
<?php
$usuario = $conecta->query("SELECT * from users where email='$emails'");
for($i=1;$i=$usuario->fetch_assoc();){

  $id = $i['id_usuario'];
  $plano = $i['plano'];

  if($plano == '1'){
    $p = '5';
  }elseif($plano == '2'){
    $p = '30';
  }

$conta = $conecta->query("SELECT * from templatepronto where id_cliente='$id'");
  $row_cnt = $conta->num_rows;

  $a = $p - $row_cnt;

    printf("Voc&ecirc; pode editar at&eacute; $p imagens nesse plano por um periodo de 30 dias. <br />Voce ainda tem direto a $a imagens.\n", $row_cnt);
echo '<hr>';
    if($row_cnt == 5){
      echo'<div class="alert alert-danger">Ops, voc&ecirc; n&atilde;o pode mais editar imagens, fa&ccedil;a upgrade para ter acesso a novas imagens.</div>';
    }
    if($plano == '1'){
      echo'<a href="upgrade.php" type="button" class="btn btn-success">Seja Premium</a>';
    }

  }
?>

<hr>
<?php
$usuario = $conecta->query("SELECT * from users where email='$emails'");
  for($i=1;$i=$usuario->fetch_assoc();)
    {

      $empresa = $i['empresa'];
      $logo = $i['logo'];

      if($empresa == ''){
      echo '<div class="alert alert-danger">
  <strong>Considere preencher seu perfil, assim n&atilde;o ser&aacute; necess&aacute;rio enviar dados todas as vezes</strong> .
</div>';  
      }

      if($logo == ''){
      echo '<div class="alert alert-danger">
  <strong>Ainda n&atilde;o temos seu logotipo, com ele suas imagens ficar&atilde;o a cara de sua empresa. Caso n&atilde;o tenha ser&aacute; subst&iacute;tuido pelo nome. Complete seu perfil e carregue seu logo</strong> .
</div>';  
      }

      
    }
?>

           <form role="form" id="contactform" class="rounded" method="post" action="imagem-finalizada.php" enctype="multipart/form-data">

                
            <div class="row">

              <?php
              $template = $conecta->query("SELECT * from templates where id_template='$modelo' order by id_template desc");
  for($i=1;$i=$template->fetch_assoc();)
    {
      echo'<div class="col-md-4">
            <img src="template/'.$i['imagem'].'" class="img-responsive" width="100%" />
            
            </div>

            <div class="col-md-8">
            <div class="form-group">
    <label for="texto">TEXTO PARA IMAGEM CAMPO 1:</label>
    <input type="text" class="form-control" maxlength="70" id="email" name="texto1" required="required">
    Insira no m&aacute;ximo 70 caracteres
  </div>
    <div class="form-group">
  <label for="texto">TEXTO PARA IMAGEM CAMPO 2:</label>
    <input type="text" class="form-control" id="email" maxlength="40" name="texto2" required="required">
    Insira no m&aacute;ximo 40 caracteres
  </div>

  <div class="form-group">
   <label>Imagem principal</label>
          <input type="file" name="file">
          <br />
           Caso n&atilde;o seja carregada, ser&aacute; utilizado a imagem do template

  </div>
  <input id="prodId" name="modelo" type="hidden" value="'.$i['id_template'].'">
            </div>
            ';
    }
              ?>
            
            
            </div>

         <hr>

         <?php
          if($row_cnt == 5){
            echo '<a href="upgrade.php" type="button" class="btn btn-primary">Fazer upgrade</a>
';
          }else{
            echo'<button type="submit" class="btn btn-default">Avan&ccedil;ar</button>';
          }
         ?>
  
  
</form>
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
