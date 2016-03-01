<?php
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

fwrite(STDOUT, "let's check the values in our things!\n");

foreach ($things as $value) {
		
	switch (gettype($value)) {
		
		
		case "integer":			
			echo "$value is an integer\n";
			break;

		case "double":
			
			echo "$value is a float\n";
			break;

		case "boolean":
			
			echo var_export($value) . " is a boolean\n";
			break;

		case "array":
			
			foreach ($value as $key => $arrayval) {

				echo "$arrayval is indic $key in an array\n";

			}

			break;

		case "NULL":
			
			echo var_export($value) . " is null\n";
			break;

		case "string":
			
			echo "$value is a string\n";
			break;


	}

}


fwrite(STDOUT, "\n\nNow let's look at all the scalars in our things\n");

foreach ($things as $key => $value) {
	if (is_scalar($value)) {
		echo var_export($value) . " is a scalar\n";
	}
}


fwrite(STDOUT, "\n\nMatching the window in the excercise...\n");

foreach ($things as $key => $value) {
	if (is_scalar($value)) {

		echo "$value\n";

	} else if (is_array($value)) {

		echo "Array (";

		foreach ($value as $indic) {
			
			 echo " $indic";

		}

		echo " )\n";

	} else {

		echo "\n";
	}
}
