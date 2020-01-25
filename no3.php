
<?php 

// n = adalah jumlah orang 
$n = 10;

function handshake($n)  
{ 
    return $n * ($n - 1) / 2; 
} 
  
echo " dapat berjabat tangan sebanyak ";
echo (handshake ($n)); 
echo " kali ";
  

?> 

