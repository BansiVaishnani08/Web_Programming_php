<!-- 7. Update Associative Array:
Add a new country-capital pair to the array from Exercise 6 and update the capital of one existing country. Display the updated array using foreach. -->]

<?php

$countries = [
    "USA" => "Washington, D.C.",
    "France" => "Paris",
    "Japan" => "Tokyo",
    "Germany" => "Berlin",
    "India" => "New Delhi"
];

$countries["Canada"] = "Ottawa";

$countries["France"] = "Marseille";

foreach ($countries as $country => $capital) {
    echo "The capital of " . $country . " is " . $capital . ".<br>";
}
?>
