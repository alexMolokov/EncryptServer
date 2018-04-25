<?php

$facade = new \EncryptServer\UserFacade();
$response = $facade->getLoginByEmail($email);

if($response->getStatus())
{
    $data = $response->getResponse();
    if(isset($data["login"]))
    {
        echo "Login has been found";
    }
}



