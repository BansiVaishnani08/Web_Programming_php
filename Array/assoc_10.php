<!-- 10. Multidimensional Associative Array:
Write a PHP script to create a multidimensional associative array where each key is a city name and the value is an associative array of information (population, area, and country). Display the information for each city. -->

<?php

$cities = [
    "Tokyo" => [
        "population" => "37.4 million",
        "area" => "2,194 km²",
        "country" => "Japan"
    ],
    "New York" => [
        "population" => "8.4 million",
        "area" => "783.8 km²",
        "country" => "USA"
    ],
    "Paris" => [
        "population" => "2.1 million",
        "area" => "105.4 km²",
        "country" => "France"
    ],
    "Berlin" => [
        "population" => "3.7 million",
        "area" => "891.7 km²",
        "country" => "Germany"
    ],
    "Mumbai" => [
        "population" => "20.7 million",
        "area" => "603.4 km²",
        "country" => "India"
    ]
];


$cityNames = array_keys($cities);
$numCities = count($cities);


for ($i = 0; $i < $numCities; $i++) {
    $city = $cityNames[$i]; 
    $info = $cities[$city];

    echo "City: $city<br>";
    echo "Population: " . $info["population"] . "<br>";
    echo "Area: " . $info["area"] . " square miles<br>";
    echo "Country: " . $info["country"] . "<br><br>";
}

?>
