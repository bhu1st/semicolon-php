<?php/*Using an array as a double-ended queue	mixed array_shift ( array array)	int array_unshift ( array array, mixed var [, mixed ...])	int array_push ( array array, mixed var [, mix ...])	mixed array_pop ( array array)	*/	$names = array("ram", "hari", "syam", "sita", "gita", "rita");    	echo "<pre>";	print_r($names);	echo "</pre>";			echo $firstname = array_shift($names); // removes the first element ram from the array and assigns to $firstname    echo "<br/>";		echo "<pre>";	print_r($names);	echo "</pre>";		    array_push($names, $firstname); // push ram back to the array from end (as last array element)    	echo "<pre>";	print_r($names);	echo "</pre>";			echo $firstname = array_pop($names)."<br/>"; // remove last array element that is now "ram"    		echo "<pre>";	print_r($names);	echo "</pre>";    array_unshift($names, $firstname);  //puts back $username to array. which is "ram" this case	        echo "<pre>";	print_r($names); // finally the original array	echo "</pre>";					?>