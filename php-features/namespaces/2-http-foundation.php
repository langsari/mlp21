<?php
require 'vendor/autoload.php';

use \Symfony\Component\HttpFoundation\Response;

$response = new Response('Oww', 400);
$response->send();
