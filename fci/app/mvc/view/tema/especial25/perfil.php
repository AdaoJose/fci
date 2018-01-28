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

  $file = $_FILES['file']['name'];   //verifica a imagem 
  $iduser = $_POST['iduser'];

if($file){

                //se conter imagem insere esse

                $arquivo_tmp = $_FILES['file']['tmp_name'];

                $imagem = $file;

                // Pega a extensao

                 $extensao = strrchr($imagem, '.');

 

                // Converte a extensao para mimusculo

                 $extensao = strtolower($extensao);

                 // Somente imagens, .jpg;.jpeg;.gif;.png

                // Aqui eu enfilero as extesões permitidas e separo por ';'

                // Isso server apenas para eu poder pesquisar dentro desta String

                if(strstr('.png', $extensao))

                    {

                    // Cria um nome único para esta imagem

                    // Evita que duplique as imagens no servidor.

                    $novoNome = md5(microtime()) . $extensao;

                    $imagem = $novoNome;

                    // Concatena a pasta com o nome

                    $destino = 'users/' . $imagem; 

         

                   

                      move_uploaded_file($arquivo_tmp, $destino);

                       

                    }else{

                      echo'O FORMATO DA IMAGEM ESTA INCORRETO. ENVIE PNG COM FUNDO TRANSPARENTE';
                      exit;
                    }

                    $inseredados = $conecta->query('update users set nome="'.$_POST['nome'].'", empresa= "'.addslashes($_POST['empresa']).'", segmento= "'.addslashes($_POST['categoria']).'", logo= "'.$imagem.'" where id_usuario="'.$iduser.'"');

                  }else{
   
   $inseredados = $conecta->query('update users set nome="'.$_POST['nome'].'", empresa= "'.addslashes($_POST['empresa']).'", segmento= "'.addslashes($_POST['categoria']).'" where id_usuario="'.$iduser.'"');

 }
    
   if($inseredados){
    echo '<div class="alert alert-success">
  <strong>ATUALIZADO COM SUCESSO</strong> .
</div>';
   }else{
    echo'<div class="alert alert-danger">
  <strong>ALGUM ERRO OCORREU!</strong> .
</div>';
   }

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
              
              <span class="subheading">EDITE SEU PERFIL</span>
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
  <strong>Seja bem vindo!</strong> .
</div>
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

         
                
               <?php
              $usuario = $conecta->query("SELECT * from users where email='$emails'");
  for($i=1;$i=$usuario->fetch_assoc();)
    {

      $usuarioa = $i['id_usuario'];

    
              ?>


<form role="form" id="contactform" class="rounded" method="post" action="perfil.php" enctype="multipart/form-data">

                <div class="form-group">
    <label for="email">SEU NOME:</label>
    <input type="text" class="form-control" id="email" name="nome" value="<?php echo $i['nome'];?>" required="required">
  </div>
  <div class="form-group">
    <label for="email">EMPRESA:</label>
    <input type="text" class="form-control" id="email" value="<?php echo $i['empresa'];?>" name="empresa" required="required">
  </div>
            

          <div class="form-group">
    <label for="email">SEU EMAIL:</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $i['email'];?>" disabled="disabled" required="required">
  </div>

  <div class="form-group">
                                <label>Categoria</label>
                                <select class="form-control" name="categoria">
                                <?php

                $query = $conecta->query("select * from categoriatemplate");
                for($as=1;$as=$query->fetch_assoc();$as++){
                $categoria = $as['categoria'];
                $idcategoria = $as['id_categoria'];
                echo"<option value=\"$idcategoria\">$categoria</option>";}

?>
                                </select>
                            </div>

                            <div class="form-group">
                        <label>Logotipo</label>
                        <input type="file" name="file">
                        <hr>
                        Aten&ccedil;&atilde;o: Seu logotipo deve ser enviado em png com fundo transparente, caso contr&aacute;rio o mesmo n&atilde; a como enxaixar na imagem
                        </div>


                            

         <hr>
  <input id="prodId" name="iduser" type="hidden" value="<?php echo $usuarioa;?>">
  <button type="submit" class="btn btn-default">Avançar</button>
</form>

<?php }?>
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
