<?php
$g="CHRISTIAN";

echo " reverse before: <b>",$g,"</b><br><br>";
echo " reverse after: <b>";
for ($i=strlen($g)-1; $i >=0 ; $i--) { 
    echo $g[$i];
}
echo "</b>";

?>