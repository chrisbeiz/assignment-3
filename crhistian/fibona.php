<?php  
$nn = 0;  
$m = 0;  
$o = 1;  
echo "<h3>Fibonacci series for first 12 numbers: </h3>";  
echo "\n";  
echo $m.' '.$o.' ';  
while ($nn < 10 )  
{  
    $w = $o + $m;  
    echo $w.' ';  
    $m = $o;  
    $o = $w;  
    $nn = $nn + 1;  
}
?>  