
   <h1><P>Rhombus</P></h1> 
<?php
    
    $chris=10;

    for ($i=1; $i <=$chris ; $i++) { 
        echo "<br>";
        for ($j=1; $j <=$chris ; $j++) { 
            if ($j<=($chris-$i)) {
                echo "&nbsp";
            }
            else {
                if ($i==10) {
                    
                        for ($i=1; $i <=$chris ; $i++) { 
                            
                            for ($j=$chris; $j >=1; $j--) { 
                            if ($j<=($chris-$i)) {
                                echo "*";   
                            }
                        else {
                            echo "&nbsp";
                        }
                    }
                    echo "<br>";
                }
                
                   break; 
                }
                else{
                    echo "*";
                }
                    

                
                
            }
        }
    }

?>
    