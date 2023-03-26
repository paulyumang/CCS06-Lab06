<?php
function greet()
{
    $message = "Hello";
    $message .= " World!";
    echo $message;
    return $message;
}

greet();
function datetoday()
{
    $today = date("F j, Y");
    $datern = " The date today is $today.";
    echo $datern;
}
datetoday();
?>