<?php

require "./bibliotecas/PHPMailer/Exception.php";
require "./bibliotecas/PHPMailer/OAuth.php";
require "./bibliotecas/PHPMailer/PHPMailer.php";
require "./bibliotecas/PHPMailer/POP3.php";
require "./bibliotecas/PHPMailer/SMTP.php";
require "./bibliotecas/PHPMailer/PHPMailerAutoload.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



$para = "e-mail master";

//Assunto Fixo
$assunto = "Formulario de Solicitacao do Saque Aniversario FGTS";


//Relação de Dados
$nome = $_POST['nomeCompleto'];
$nomeMae =  $_POST['mae'];
$cpf =  $_POST['cpf'];
$rg = $_POST['rg'];
$uf_rg = $_POST['uf_rg'];
$data_nascimento = $_POST['dt_nasc'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['uf'];
$tipo_conta = $_POST['tp_conta'];
$banco = $_POST['banco'];
$agencia = $_POST['ag'];
$conta = $_POST['conta'];
$digito = $_POST['digito'];
$assessor = $_POST['assessor'];

 //Corpo da mensagem
$mensagem = "<strong>Nome Completo:  </strong>".$nome;
$mensagem .= "<br> <strong>Nome da Mãe:  </strong>".$nomeMae;
$mensagem .= "<br> <strong>CPF:  </strong>".$cpf;
$mensagem .= "<br> <strong>RG:  </strong>".$rg;
$mensagem .= "<br> <strong>UF de RG:  </strong>".$uf_rg;
$mensagem .= "<br> <strong>Data de Nascimento:  </strong>".date('d-m-Y',strtotime($data_nascimento));
$mensagem .= "<br> <strong>CEP:  </strong>".$cep;
$mensagem .= "<br> <strong>Rua:  </strong>".$rua;
$mensagem .= "<br> <strong>Bairro:  </strong>".$bairro;
$mensagem .= "<br> <strong>Cidade:  </strong>".$cidade;
$mensagem .= "<br> <strong>Estado:  </strong>".$estado;
$mensagem .= "<br> <strong>Tipo de Conta:  </strong>".$tipo_conta;
$mensagem .= "<br> <strong>Banco:  </strong>".$banco;
$mensagem .= "<br> <strong>Agência:  </strong>".$agencia;
$mensagem .= "<br> <strong>Conta:  </strong>".$conta ."-".$digito;
$mensagem .= "<br> <strong>Assessor:  </strong>".$assessor;


$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = false;                                 
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'e-mail_usuario';                
    $mail->Password = 'senha_usuario';                           
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );                                    

    //Recipients
    $mail->setFrom('e-mail', 'Quem está enviando');
    $mail->addAddress( $para);     
    
    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = $assunto;
    $mail->Body    = $mensagem; 
    $mail->AltBody = 'Para visualizar esse utilize um Clint com suporte a HTML';

    $mail->send();

   // $mensagem->status['codigo_status'] = 1;
    //$mensagem->status['descricao_status'] = 'E-mail enviado com sucesso!';
} catch (Exception $e) {

    $mensagem->status['codigo_status'] = 1;
    $mensagem->status['descricao_status'] = 'Não foi possível enviar esse e-mail! Por favor tente novamente mais tarde. - Detalhes do erro: ' . $mail->ErrorInfo;

}




?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Obrigado</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        
        <div class="container mt-5 d-flex justify-content-center align-items-center" >
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-12">
                    <div id="regForm">
                        <img id="logo" src="img/safra-home.png" alt="safra">
                        <h2 class="title-home">Obrigado! <br> <?php echo($_POST['nomeCompleto']);?></h2>
                       
                    </div>
                </div>
            </div>
        </div>

        <script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 8000);

        </script>
    </body>
</html>