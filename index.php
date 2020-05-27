<?php

require __DIR__ . "/lib_ext/autoload.php";

use Notification\Email;

$email = new Email;
$email->sendMail("Assunto de teste", "<p>Esse é um e-mail de teste</p>", "email@retorno.com", "Nome Retorno", "email@destinatario.com", "Nome Destinatário");

var_dump($email);


