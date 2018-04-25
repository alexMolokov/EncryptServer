<?php

$facade = new \EncryptServer\UserFacade();
$response = $facade->getUserProfile($login);

// array contains "email", "login", "nickname", "firstname", "middlename", "lastname"
$data = $response->getResponse();





