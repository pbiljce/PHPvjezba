<?php
    /**
     * Write a Program to display count, from 5 to 15 using PHP loop
    */
    echo "<p>FOR petlja</p>";
    for($i = 5; $i<=15; $i++){
        echo $i . "<br>";
    }

    echo "<p>WHILE petlja</p>";
    $j = 5;
    while($j<=15){
        echo $j . "<br>";
        $j++;
    }

    echo "<p>DO WHILE petlja</p>";
    $k=5;
    do{
        echo $k . "<br>";
        $k++;
    }
    while($k<=15)
?>