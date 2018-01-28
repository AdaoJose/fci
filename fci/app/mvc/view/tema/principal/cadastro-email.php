<?php
require("classes/conect.php");
$artigo = addslashes($_GET['artigo']);
header("Content-Type: text/html; charset=ISO-8859-1",true);

$dataatual = date('Y-m-d');
session_start();


echo $_SESSION['modelo'];

$date = date('Y-m-d H:i:s');
$email = $_POST['email'];

$verificaemail = $conecta->query("SELECT * from users");
  for($i=1;$i=$verificaemail->fetch_assoc();){

    $emailcadastro = $i['email'];

    if($emailcadastro == $email){
      echo'<div class="alert alert-danger"><center><h3>Oops, o email cadastrado j&aacute; existe na base de dados, permitimos somente um email por cadastro. Acesse o painel com sua senha vinculada a esse email ou cadastre um novo email</h3><center></div>';
      echo'<a href="javascript:history.back()"><center>VOLTAR</center></a>';
      exit();
    }

  }

$senha = md5($_POST['senha']);
$inseredados = $conecta->query('insert into users (email,senha, data) values ("'.$email.'","'.$senha.'","'.$date.'")');
if($inseredados){
  echo $_SESSION['email'] = $email;

  //Encaminha email
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

//Load composer's autoloader
/*require("phpmailer/class.phpmailer.php");
require("phpmailer/class.smtp.php");

//require("PHPMailer-master/src/PHPMailer.php");
//require("PHPMailer-master/src/SMTP.php");


// Inicia a classe PHPMailer
$mail = new PHPMailer();
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp-pulse.com"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
$mail->Username = "v3agenciadigital@gmail.com"; // Usuário do servidor SMTP (endereço de email)
$mail->Password = "jHb7634KSFkFDX"; // Senha do servidor SMTP (senha do email usado)
$mail->Port = 2525;
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->From = "jonathan@sindusconmt.org.br"; // Seu e-mail
//$mail->Sender = "jonathan@sindusconmt.org.br"; // Seu e-mail

$mail->From = "contato@modig.com.br"; // Seu e-mail
$mail->Sender = "contato@modig.com.br"; // Seu e-mail
$mail->FromName = "Modig - Gestor de imagens para redes sociais"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress("$email");
//$mail->AddAddress("$emailamigo");
$mail->AddCC("contato@modig.com.br", "$email"); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Bem vindo ao Modig"; // Assunto da mensagem
$mail->Body = "Ola, seja bem vindo ao Modig. <br /><br />Voce agora pode gerenciar posts para redes sociais diretamente de uma plataforma objetiva e funcional.<br />Seu cadastro foi feito e seu usuario ja esta liberado para solicitar posts.<br /><strong>Seus dados</strong><br /><br />Email: $email<br />Senha: ######<br /><br />Qualquer duvida ou suporte encaminhar email para contato@modig.com.br.<br /><br />Atenciosamente<br /><br />

<img src=\"http://www.modig.com.br/img/logo_dark.png\" width=\"150\">";
//$mail->AltBody = 'Este é o corpo da mensagem de teste, em Texto Plano! \r\n 

//<IMG src="http://seudomínio.com.br/imagem.jpg" alt=":)"  class="wp-smiley"> ';


// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo
// Envia o e-mail

$enviado = $mail->Send();
// Limpa os destinatários e os anexos

$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Exibe uma mensagem de resultado

if ($enviado) {
echo "<div class=\"alert alert-success\" role=\"alert\">E-mail enviado com sucesso!</div>";
} else {

echo "<div class=\"alert alert-danger\" role=\"alert\">Não foi possível enviar o e-mail.</div>

";

echo "Informações do erro: 

" . $mail->ErrorInfo;

}*/
$url = 'https://api.elasticemail.com/v2/email/send';

try{
        $post = array('from' => 'contato@modig.com.br',
    'fromName' => 'Modig - Soluções Digitais',
    'apikey' => '6d4c47eb-0786-4e8c-81b4-0a51f6f60d5f',
    'subject' => 'Cadastro com sucesso no Modig',
    'to' => 'contato@modig.com.br; '.$email.'',
    'bodyHtml' => '<h1>Olá, seja bem vindo ao Modig. </h1><br /><br />Você agora pode gerenciar posts para redes sociais diretamente de uma plataforma objetiva e funcional.<br />Seu cadastro foi feito e seu usuário já está liberado para solicitar posts.<br /><strong>Seus dados</strong><br /><br />Email: '.$email.'<br />Senha: ######<br /><br />Qualquer dúvida ou suporte encaminhar email para contato@modig.com.br.<br /><br />Atenciosamente<br /><br />

<img src=\"http://www.modig.com.br/img/logo_dark.png\" width=\"150\">',
    'bodyText' => 'Text Body',
    'isTransactional' => false);
    
    $ch = curl_init();
    curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => $post,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
      CURLOPT_SSL_VERIFYPEER => false
        ));
    
        $result=curl_exec ($ch);
        curl_close ($ch);
    
        echo $result; 
}
catch(Exception $ex){
  echo $ex->getMessage();
}

  header ('location:login.php');
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
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Sample Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
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
  <strong>Bem vindo ao Modig. Cadastre-se gratuito agora</strong> .
</div>
           <form role="form" id="contactform" class="rounded" method="post" action="cadastro-email.php" enctype="multipart/form-data">

                
            

          <div class="form-group">
    <label for="email">SEU EMAIL:</label>
    <input type="email" class="form-control" id="email" name="email" required="required">
  </div>

  <div class="form-group">
    <label for="email">SENHA:</label>
    <input type="password" class="form-control" name="senha" id="email" required="required">
  </div>


                            

         <hr>
  
  <button type="submit" class="btn btn-default">Avançar</button>
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
