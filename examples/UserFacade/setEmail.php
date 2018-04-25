<?php

$facade = new \EncryptServer\UserFacade();
$response = $facade->setEmail($login, $email);

if($response->getStatus())
{
    echo "Email has been set";
}



