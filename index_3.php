<!-- 3. Count Array Elements:
Write a PHP script to count the number of elements in an indexed array using count(). -->

<?php

    $fruits = ["Apple", "Banana", "Mango", "Orange", "Strawberry"];

    echo'<h3>Original array</h3>';
    for($i=0;$i<count($fruits);$i++)
    {
        echo $fruits[$i]."<br>";
    }

    echo'<h3>Total no of elements </h3>';
    echo count($fruits);

?>