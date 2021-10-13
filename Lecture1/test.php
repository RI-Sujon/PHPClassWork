<?php
	
	echo "<h1>Hello Sujon !!! </h1><br>" ;
	$x = 15 ;
	$y = 20 ;
	
	if($x == 15) {
		echo "I am $x <br>" ;
		print "I am print $x <br>" ;
	}
	
	switch($x){
		case 10:
			echo "I am $x <br>" ;
			break ;
			
		case 15:
			echo "Rhjjjj  <br>" ;
		
		
		default :
			print "not Found <br>" ;
	}
	
	echo "<br><br> " ;
	
	for($i=0 ; $i<10 ; $i++){
		echo "sujon $i <br>" ;
	}
	
	$j = 1 ;
	while($j < 15){
		echo $j."       Sujon Ri<br>" ;
		$j = $j + 2 ;
	}
	
	echo "<br><br>" ;
	
	$names = array(1,2,"522") ;
	
	for($i=0;$i<count($names);$i++){
		echo addValue($names[$i],100) . "<br>" ;
	}
	
	function addValue($x,$y){
		return $x+$y ;
	}

?>