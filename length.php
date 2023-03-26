<?php

function compute($value) 
{
    $Count = strlen($value);
    $TotalVAL = $Count * 2;
    $OutPut = "The answer to the riddle is ";
    echo $OutPut;
    return $TotalVAL;
}
echo compute("twister");

?>
