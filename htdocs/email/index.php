<?php 

require_once("vendor/autoload.php");

// Importar classes do PHPMailer para o espaço de nomes global
use PHPMailer \ PHPMailer \ PHPMailer;
use PHPMailer \ PHPMailer \ SMTP;

// Crie uma nova instância do PHPMailer
$mail = new PHPMailer;

// Diga ao PHPMailer para usar SMTP
$mail-> isSMTP ();

// Ativar depuração SMTP
// SMTP :: DEBUG_OFF = desativado (para uso em produção)
// SMTP :: DEBUG_CLIENT = mensagens do cliente
// SMTP :: DEBUG_SERVER = mensagens do cliente e do servidor
$mail->SMTPDebug = SMTP :: DEBUG_SERVER;

// Define o nome do host do servidor de email
$mail->Host = 'smtp.gmail.com';
// usar
// $ mail-> Host = gethostbyname ('smtp.gmail.com');
// se sua rede não suportar SMTP sobre IPv6

// Defina o número da porta SMTP - 587 para TLS autenticado, também conhecido como envio SMTP RFC4409
$mail->Port = 587;

// Defina o mecanismo de criptografia a usar - STARTTLS ou SMTPS
$mail->SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS;

// Se deve usar autenticação SMTP
$mail->SMTPAuth = true;

// Nome de usuário a ser usado para autenticação SMTP - use o endereço de e-mail completo para o gmail
$mail->Username = 'rosario.marcosv@gmail.com';

// Senha a ser usada para autenticação SMTP
$mail->Password = '********8';

// Define de quem a mensagem deve ser enviada
$mail->	setFrom ('rosario.marcosv@gmail.com', 'Marcos Vinicius');

// Defina um endereço de resposta alternativo
//$ mail-> addReplyTo ('replyto@example.com ',' Primeiro Último ');

// Defina para quem a mensagem deve ser enviada
$mail-> addAddress ('thaisi_tsc@yahoo.com.br ', 'Esposa Leaozinho');

// Define a linha de assunto
$mail->Subject = 'Teste SMTP do PHPMailer GMail';

// Leia um corpo da mensagem HTML de um arquivo externo, converta imagens referenciadas em incorporadas,
// converte HTML em um corpo alternativo básico de texto sem formatação
$mail->msgHTML (file_get_contents ('contents.html'), __DIR__);

// Substitua o corpo do texto sem formatação por um criado manualmente
$mail->AltBody = 'Este é um corpo de mensagem em texto sem formatação';

// Anexar um arquivo de imagem
//	$ mail-> addAttachment ('images / phpmailer_mini.png');

// envia a mensagem, verifica se há erros
if(! $mail-> send ()) {
    echo 'Erro na correspondência:'. $mail->ErrorInfo;
}else{
    echo 'Mensagem enviada!';
    // Seção 2: IMAP
    // Descomente-os para salvar sua mensagem na pasta 'E-mails enviados'.
    #if (save_mail ($ mail)) {
    # echo "Mensagem salva!";
    #}
}

// Seção 2: IMAP
// Os comandos IMAP requerem a extensão PHP IMAP, encontrada em: https://php.net/manual/en/imap.setup.php
// Função para chamar que usa as funções imap _ * () do PHP para salvar mensagens: https://php.net/manual/en/book.imap.php
// Você pode usar imap_getmailboxes ($ imapStream, '/ imap / ssl', '*') para obter uma lista de pastas ou rótulos disponíveis, isso pode
// será útil se você estiver tentando fazer isso funcionar em um servidor IMAP que não seja do Gmail.


/*function save_mail ($mail)
{
    // Você pode alterar 'Email enviado' para qualquer outra pasta ou marca
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail{/Envia Mail';

    // Diga ao seu servidor para abrir uma conexão IMAP usando o mesmo nome de usuário e senha que você usou para SMTP
    $imapStream = imap_open ($caminho, $mail->Username, $mail->Password);

    $resultado = imap_append ($imapStream, $caminho, $mail-> getSentMIMEMessage ());
    imap_close ($imapStream);

    return $resultado;
}
*/
?>