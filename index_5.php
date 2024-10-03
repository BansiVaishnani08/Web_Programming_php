<!-- 5. Multidimensional Indexed Array: -->
<!-- Create a multidimensional indexed array that contains the names of 3 students and their respective scores in 3 subjects. Display the score of each student. -->
<!-- 5. Multidimensional Indexed Array:
Create a multidimensional indexed array that contains the names of 3 students and their respective scores in 3 subjects. Display the score of each student. -->

<?php

$students = [
    ["name" => "Bansi", "scores" => [45, 72, 52]],  
    ["name" => "Bhakti", "scores" => [80, 63, 66]],    
    ["name" => "yashvi", "scores" => [94, 31, 59]]
];


$num_students = count($students);

for ($i = 0; $i < $num_students; $i++) 
{
   
    echo "Scores for " . $students[$i]["name"] . ":<br>";
    $num_scores = count($students[$i]["scores"]);
    
    for ($j = 0; $j < $num_scores; $j++) 
    {
        echo $students[$i]["scores"][$j] . " ";
    }

    echo "<br><br>";
}
?>