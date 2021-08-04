<?php
function updateCounter()
{
    global $counter;
    $counter++;
}
$counter = 10;
updateCounter();

echo $counter
?>