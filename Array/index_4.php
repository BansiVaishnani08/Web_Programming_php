<!-- 4. Array Sorting:
Write a PHP script to sort the array of fruits in ascending and descending order, and display both sorted arrays. -->

<?php

    $fruits = ["Apple", "Orange", "Strawberry", "Banana", "Mango"];

    echo'<h3>Original array</h3>';
    for($i=0;$i<count($fruits);$i++)
    {
        echo $fruits[$i]."<br>";
    }

    echo'<h3>Ascending Array </h3>';
    echo sort($fruits);
    print_r($fruits);

    echo'<h3>Decending Array </h3>';
    echo rsort($fruits);
    print_r($fruits);

?>