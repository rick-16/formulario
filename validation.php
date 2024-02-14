<?php
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
print "olá me chamo $nome <br><br>";

$telefone = filter_input(INPUT_POST, "telefone", FILTER_VALIDATE_INT);
print "meu telefone $telefone";

$msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);


# var. para enviar um email
$to = "erickwilliambairros@gmail.com";
$subject = "novo contato pelo site";
$message = "nome : $nome 
            telefone : $telefone
            mensagem : $msg";
$headers = "from: erickwilliambairros@gmail.com";

//enviando o email
try {
    mail($to, $subject, $message, $headers);
    print " <br> obrigado,  em breve entraremos em contato ";
} catch (Exception $error) {
print "erro ao enviar ESSA PORRA FUDIDA DO KRAIO";
}