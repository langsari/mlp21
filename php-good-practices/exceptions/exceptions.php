<?php
$exception = new Exception('Danger, Will Robinson!', 100);

$code = $exception->getCode(); // 100
$message = $exception->getMessage(); // 'Danger...'

