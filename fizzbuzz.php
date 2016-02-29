<?php

echo "we are here we are here we are here!\n";

for ($i=1; $i <= 100; $i++) { 
	
	$fbout = ""; 

	if ( $i % 3 == 0) {
		
		$fbout = $fbout . "Fizz";

	}

	if ($i % 5 == 0) {
		
		$fbout = $fbout . "Buzz";

	}


	if ($fbout == "") {

		$fbout = $i;

	}


	echo "$fbout\n";

};
