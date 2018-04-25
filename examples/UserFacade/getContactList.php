<?php

$facade = new \EncryptServer\UserFacade();
$response = $facade->getContactList($login);

$data = $response->getResponse();
$contactList = $data["contactList"];
$logins = $contactList->getAllUsers();



