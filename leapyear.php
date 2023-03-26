<?php

for($i = 4; $i <= 2024; $c+=4)
{
    if($c % 4 == 0)
    {
        echo $c . "\n";
        
        if($c == 2024)
        {
            break;
        }
    }
}

?>
