<?php
session_start();
// Inclui o arquivo class.phpmailer.php localizado na pasta class
include_once("phpmailer/class.phpmailer.php");


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem']; 

    

    // Inicia a classe PHPMailer
    $mail = new PHPMailer(true);

    // Define os dados do servidor e tipo de conexão
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsSMTP(); // Define que a mensagem será SMTP
    
    try {
        $mail->Host = 'smtp.lw13378040554fbd4480.hospedagemdesites.ws'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
        $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
        $mail->Port       = 587; //  Usar 587 porta SMTP
        $mail->Username = 'site@lw13378040554fbd4480.hospedagemdesites.ws'; // Usuário do servidor SMTP (endereço de email)
        $mail->Password = 'envi@_1820'; // Senha do servidor SMTP (senha do email usado)
    
        //Define o remetente
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
        $mail->SetFrom('site@lw13378040554fbd4480.hospedagemdesites.ws', $_POST["nome"]); //Seu e-mail
        $mail->AddReplyTo($_POST["email"]); //Seu e-mail
        $mail->Subject = 'Contato pelo site - Marcelo Astrolino';//Assunto do e-mail
        //Define os destinatário(s)
        //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->AddAddress('felipe@plyn.com.br', 'Marcelo Astrolino'); // felipe@plyn.com.br
    
        //Campos abaixo são opcionais 
        //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
        //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
        //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
    
    
        //Define o corpo do email
        $mail->MsgHTML("<table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
        <tr>
        <td>
        <tr>
        <td width='500'>Nome: <b>$nome</b></td>
        </tr>
        <tr>
        <td width='320'>E-mail: <b>$email</b></td>
        </tr>
        <tr>
        <td width='320'>Telefone: <b>$telefone</b></td>
        </tr>
        <tr>
        <td width='320'>Endereço: <b>$assunto</b></td>
        </tr>
        <tr>
        <td width='320'>Mensagem: <b>$mensagem</b></td>
        </tr>
        </td>
        </tr> 
        </table>"); 
    
        ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
        //$mail->MsgHTML(file_get_contents('arquivo.html'));
        $mail->Send();
        $sucess = "Mensagem enviada com sucesso, aguarde nosso retorno!";
        $_SESSION["newsession"]=$sucess;
        header("Location:/astrolino/");
    
        //caso apresente algum erro é apresentado abaixo com essa exceção.
    }catch (phpmailerException $e) {
            echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
        }




?>