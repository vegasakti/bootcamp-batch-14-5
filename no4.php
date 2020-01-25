<?php   
    $string = "Budi santoso mangku negoro";  
    $count;  
       
    print("output: <br>");  
    for($i = 0; $i < strlen($string); $i++) {  
        $count = 1;  
        for($j = $i+1; $j < strlen($string); $j++) {  
            if($string[$i] == $string[$j] && $string[$i] != ' ') {  
                $count++;  
                $string[$j] = '0';  
            }  
        }  
        if($count > 1 && $string[$i] != '0'){  
            print($string[$i]);  
            print(":");
            print($count);  
            print("<br>");     
        }



        

    }  
    ?>  
   