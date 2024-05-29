
<?php

    $Nome = $_POST['nome'];
    $Email = $_POST['Email'];
    $Telefone = $_POST['telefone'];
    $Mensagem = $_POST['mensagem'];
    $From   = 'atendimento@skincs.store';

    $Headers      = "MIME-Version: 1.1\n";
    $Headers     .= "Content-type: text/html; charset=utf-8\n";
    $Headers     .= "From: Meu Site <$From>\n";
    $Headers     .= "Return-Path: $From\n";
    $Headers     .= "Reply-to: $Email\n";

    mail($Email, $Mensagem, $Headers, $From);
    header('Location:obrigado.php');	

?>

