<?php
date_default_timezone_set('Asia/Bangkok');

$timezone = new DateTimeZone('Asia/Bangkok');
$datetime = new \DateTime('2021-09-20', $timezone);
$datetime->setTimezone(new DateTimeZone('Asia/Hong_Kong'));
