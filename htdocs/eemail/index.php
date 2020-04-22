<?php 

require_once("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;

// 508240283838-trnrone2oq2uka6qcad2c98jd1d3f3mo.apps.googleusercontent.com
// tCU6dE2JxDZa5WIZQVzVKtns

//Create a new PHPMailer instance
$mail = new PHPMailer(true); // acrescentei (true)

// Diga ao PHPMailer para usar SMTP
$mail-> isSMTP ();
$mail->SMTPDebug = 4;
$mail->Host = 'smtp.gmail.com';
// usar
 //$mail->Host = gethostbyname ('smtp.gmail.com');
// se sua rede não suportar SMTP sobre IPv6
$mail->Port = 587;
$mail->SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS;
$mail->SMTPAuth = true;
$mail->Username = 'rosario.marcosv@gmail.com';
$mail->Password = '888888';

// Define de quem a mensagem deve ser enviada
$mail->	setFrom ('rosario.marcosv@gmail.com', 'Marcos Vinicius');

// Defina para quem a mensagem deve ser enviada
$mail-> addAddress ('rosario.marcosv@gmail.com', 'testando');
$mail->isHTML(true);
// Define a linha de assunto
$mail->Subject = 'Teste SMTP do PHPMailer GMail';
$mail->msgHTML (file_get_contents ('contents.html'), __DIR__);

// Substitua o corpo do texto sem formatação por um criado manualmente
$mail->AltBody = 'Este é um corpo de mensagem em texto sem formatação';


// envia a mensagem, verifica se há erros
        if(!$mail-> send()) {
            echo 'Erro na correspondência:'. $mail->ErrorInfo;
        }else{
            echo 'Mensagem enviada!';
          
        }


?>