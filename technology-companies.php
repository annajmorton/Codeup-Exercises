<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];



echo "I am so pissed i just saved over all this work!\n";

// print companies 

    echo "\n\n\nhere is my array: \n";

    foreach ($companies as $key => $value) {
        
        echo $key . PHP_EOL;
    }
    
//sort companies by name

    echo "\n\n\nnow stuff is sorted by company name:\n";
    ksort($companies);

    foreach ($companies as $key => $value) {
        
        echo $key . PHP_EOL;
    }




// modify array to position last name first for lastname sorting

    foreach ($companies as &$value) {
        
            foreach ($value as &$name) {
                
                $tempArray = explode(" ", $name);
                array_unshift($tempArray, array_pop($tempArray));
                $name = implode(" ", $tempArray);
                
            }

    }


// sort people by name

    foreach ($companies as $key => &$value) {
        
        asort($value);
    }

    
// change array back to first name last name order for printing 

    foreach ($companies as &$value) {
        
            foreach ($value as &$name) {
                
                $tempArray = explode(" ", $name);
                array_push($tempArray, array_shift($tempArray));
                $name = implode(" ", $tempArray);
                
            }

    }


    echo "\n\n\ncompany people are sorted alphabetically by lastname\n";
    var_export($companies);

// sort companies biggest to smallest

    echo "\n\n\nnow stuff is sorted by biggest to smallest company:\n";
    arsort($companies);

    foreach ($companies as $key => $value) {
        
        echo $key . PHP_EOL;
    }


