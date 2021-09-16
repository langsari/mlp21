<?php
date_default_timezone_set('Asia/Bangkok');

// Constructor
$datetime1 = new DateTime();

// Constructor with argument
$datetime2 = new DateTime('2021-09-16 5:03 AM');

// Static constructor with format
$datetime3 = DateTime::createFromFormat('M j, Y H:i:s', 'Jan 2, 2021 23:05:03');

// echo $datetime3->format('u');
// echo $datetime1->getTimestamp();
// echo $datetime2->getTimestamp();
echo $datetime3->getTimestamp() . PHP_EOL;

foreach ([
    'ATOM',
    'COOKIE',
    'ISO8601',
    'RFC822',
    'RFC850',
    'RFC1036',
    'RFC1123',
    'RFC2822',
    'RFC3339',
    'RFC3339_EXTENDED',
    'RSS',
    'W3C',
    ] as $format) {
    eval("print 'DateTimeInterface::$format\t'.\$datetime1->format(DateTimeInterface::$format).\"\n\";");
 }