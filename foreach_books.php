<?php

fwrite(STDOUT, "BooksAmillion!!!!!\ngive me a year and i will print all my books published after that year\n");

do {
	
	$cuttoff = trim(fgets(STDIN));
	
	if (is_numeric($cuttoff)) {

		$cuttoff = (int)$cuttoff;

	} else {

		echo "that's not a valid year, please give me another\n";
	}


} while (!is_int($cuttoff));



$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach ($books as $title => $tinfo) {
	
	if ($tinfo['published'] > $cuttoff) {
		
		echo $title. PHP_EOL;

		foreach ($tinfo as $detail => $info) {
			
			echo "	$detail: $info\n";
		}
	}

}


