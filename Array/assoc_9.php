<!-- 9. Array Key and Value Sorting:
Write a PHP script to sort the associative array by keys (countries) in ascending order and then by values (capitals) in descending order. Display both sorted arrays. -->

<?php

$countries = [
    "USA" => "Washington, D.C.",
    "France" => "Paris",
    "Japan" => "Tokyo",
    "Germany" => "Berlin",
    "India" => "New Delhi"
];

ksort($countries);
echo "<b>country (keys) in ascending order:<br></b>";

foreach ($countries as $country => $capital) 
{
    echo $country . " => " . $capital . "<br>";
}

echo "<br>"; 

arsort($countries);
echo "<b>capital (values) in descending order:<br></b>";

foreach ($countries as $country => $capital) 
{
    echo $country . " => " . $capital . "<br>";
}
?>
