<?php
require 'vendor/autoload.php';

$response = new \Symfony\Component\HttpFoundation\Response('Oww', 400);
$response->send();
