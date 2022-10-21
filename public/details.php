<?php


require_once __DIR__ . '/../config/twig.php';

$mail = 'billy@gmail.com';

echo $twig->addGlobal('mail', $mail);