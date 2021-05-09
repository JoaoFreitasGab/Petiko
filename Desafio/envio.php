<?php


$destinatario = "joao.gcamargo1@gmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$cep = $_REQUEST['cep'];
$rua = $_REQUEST['rua'];
$bairro = $_REQUEST['bairro'];
$cidade = $_REQUEST['cidade'];
$uf = $_REQUEST['uf'];


 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "Pedidos" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "CEP: " . $cep . "\n\n";
$body = $body . "Logradouro: " . $rua . "\n";
$body = $body . "Bairro: " . $bairro . "\n";
$body = $body . "Cidade: " . $cidade . "\n\n";
$body = $body . "Estado: " . $uf . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $body, "From: $email\r\n");
header("location:index.html");

?>