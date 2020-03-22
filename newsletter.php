<?php

// Si le formulaire n'a pas été soumis
if( !isset($_POST) || empty($_POST) ||
    !isset($_POST['email']) || empty($_POST['email'])
  )
    echo '0';
    exit(0);

$email   = htmlspecialchars($_POST['email']);

if( !preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email) )
    echo '0';
    exit(0);