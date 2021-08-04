<?php
/*
Comment style
*/

/// SHELL-STYLE COMMENTS
$x = 17; // store 17 into the variable $x

/// SHELL-STYLE COMMENTS
// convert &#nnn; entities into characters
$text = preg_replace('/&#([0-9])+;/', "chr('\\1')", $text);

/// SHELL-STYLE COMMENTS
#######################
## Cookie functions
#######################

/// SHELL-STYLE COMMENTS
if ($doubleCheck) {
    # create an HTML form requesting that the user confirm the action
    echo confirmationForm();
   }

// SHELL-STYLE COMMENTS
$value = $p * exp($r * $t); # calculate compounded interest
?>


<?php $d = 4; # Set $d to 4. ?> Then another <?php echo $d; ?>

<?php

////////////////////////
// Cookie functions
////////////////////////

if ($doubleCheck) {
    // create an HTML form requesting that the user confirm the action
    echo confirmationForm();
   }
   
   $value = $p * exp($r * $t); // calculate compounded interest
?>

<?php $d = 4; // Set $d to 4. ?> Then “another <?php echo $d; ?>

<?php
/* In this section, we take a bunch of variables and
 assign numbers to them. There is no real reason to
 do this, we're just having fun.
*/
$a = 1;
$b = 2;
$c = 3;
$d = 4;

/* These comments can be mixed with code too,
see? */ $e = 5; /* This works just fine. */
?>

<?php
$l = 12;
$m = 13;
/* A comment begins here
?>
<p>Some stuff you want to be HTML.</p>
<?= $n = 14; ?>
*/
echo("l=$l m=$m n=$n\n");
?><p>Now <b>this</b> is regular HTML...</p>
l=12 m=13 n=
<p>Now <b>this</b> is regular HTML...</p>
?>