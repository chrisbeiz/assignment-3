
<h1><P>equilateral triangle</P></h1>
<?php
  

    $chris=10;

    for ($i=1; $i <=$chris ; $i++) { 

        ?>
        <div style="margin-top:-10px">
        <?php

        for ($j=1; $j <=$chris ; $j++) { 
            if ($j<=($chris-$i)) {
                echo "&nbsp";
            }
            else {
            
                    echo "*";
                
            }
        }
        ?>
        </div>
        <?php
    }

?>
    