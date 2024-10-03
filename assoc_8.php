<!-- 8. Access Values in Associative Array: -->
<!-- Write a PHP script to access and display the capital of a specific country from the associative array created in Exercise 6. -->
<?php

$countries = array(
    "USA" => "Washington, D.C.",
    "France" => "Paris",
    "Japan" => "Tokyo",
    "India" => "New Delhi"
);

$specificKey = "France";

$specificCountry=$countries['France'];

    echo "The capital of $specificKey is $specificCountry";

?>