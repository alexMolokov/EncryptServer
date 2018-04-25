<?php

$facade = new \EncryptServer\UserFacade();
$response = $facade->block($login);

if($response->getStatus())
{
        echo "Login has been blocked";

}



