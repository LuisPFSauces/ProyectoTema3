<?php
/**
 * Regular expression to validate different types of phone numbers
 */

// simple pattern
$pattern = '/^[0-9\-\(\)\/\+\s]*$/';

// example phone numbers
$phoneNumbers = '
0821 12 34 567
08211234567
0821-1234567
0821-12 34 567
0821 - 1234567
0821 - 12 34 567
0821/1234567
0821/12 34 567
0821 / 1234567
0821 / 12 34 56 7
+49(821) 1234-567
+49 (821) 12 34 - 567
';

// convert the examples to an array
$phoneNumbers = explode("\n", trim($phoneNumbers));

// loop thru them and run preg_match for each number.
// the variable $matches should contain the number in case of a successful validation.
foreach ($phoneNumbers as $number) {
    echo "Numero: ".$number." ".preg_match($pattern, $number)."<br>";
        
    
}