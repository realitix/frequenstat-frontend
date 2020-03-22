<?php
// Si le formulaire n'a pas été soumis
if( !isset($_POST) || empty($_POST) ||
    !isset($_POST['subject']) || empty($_POST['subject']) ||
    !isset($_POST['name']) || empty($_POST['name']) ||
    !isset($_POST['message']) || empty($_POST['message']) ||
    !isset($_POST['email']) || empty($_POST['email'])
  ) {
    echo '0';
    exit(0);
}

$subject = htmlentities($_POST['name']).' - '.htmlentities($_POST['subject']);
$email   = htmlspecialchars($_POST['email']);
$message = htmlentities($_POST['message']);

if( !preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email) ) {
    echo '0';
    exit(0);
}

// On a tout, c'est bon
$to = 'contact@frequenstat.com';

if( mail($to, $subject, $message) )
    echo '1';
else
    echo '0';