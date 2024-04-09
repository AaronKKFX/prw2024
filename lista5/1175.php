<?php
    $n = array();
	
	for ($i=0; $i<20; $i++){
	    
	    $n[$i] = intval(fgets(STDIN));
	
	}
	for ($i =0; $i<10; $i++){
		$contador = $n[$i];
		$n[$i]= $n[19-$i];
		$n[19-$i]= $contador;
	}
		
	for ($i=0; $i<20; $i++){ 
	    echo "N[".$i."] = ".$n[$i]."\n";
	}
?>