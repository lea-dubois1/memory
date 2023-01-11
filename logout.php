<?php

session_start();

require_once 'User-pdo.php';

$newUser->Disconnect();
header('Location: index.php');


?>