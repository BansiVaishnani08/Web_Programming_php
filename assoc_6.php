<!-- 6. Create an Associative Array:
Write a PHP script to create an associative array with key-value pairs where the keys are the names of 5 countries, and the values are their capitals. Display the country-capital pairs. -->

<?php

$countries = [
    "USA" => "Washington, D.C.",
    "France" => "Paris",
    "Japan" => "Tokyo",
    "Germany" => "Berlin",
    "India" => "New Delhi"
];

foreach ($countries as $country => $capital) 
{
    echo "The capital of " . $country . " is " . $capital . ".<br>";
}
?>
