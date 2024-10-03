<!-- 2. Array Operations: -->
<!-- Write a PHP script to add two more fruits to the array from Exercise 1 and remove the first fruit. Display the modified array using print_r(). -->
<?php
 
    $fruits = ["Apple", "Banana", "Mango", "Orange", "Strawberry"];

    echo'<h3>Original array</h3>';
    for($i=0;$i<count($fruits);$i++)
    {
        echo $fruits[$i]."<br>";
    }
    array_push($fruits,'Kiwi','Chikku');
    array_shift($fruits);

    echo'<h3>Final Array array</h3>';
    print_r($fruits);

?>