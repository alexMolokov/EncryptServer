<?php

$facade = new \EncryptServer\UserFacade();
$response = $facade->getImage($login);

if($response->getStatus())
{
    $data = $response->getResponse();
    if(isset($data["image"]))
    {
        echo "Login has image icon";
    }
}



