<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factorial</title>
</head>
<body>
    <form action="factorial.php" method="GET">
        <label for="number">Unesite broj</label>
        <input type="text" name="number">
        <input type="submit" value="Pronađi faktorijel">
    </form>
    <?php
        /**
         * Write a factorial program using for loop in php 
         */
        if(isset($_GET["number"]) && !empty($_GET["number"])){
            $number = $_GET["number"];
            $factorial = 1;
            for($i = 1; $i <= $number; $i++){
                $factorial *= $i;
            }
            echo "Faktorijel broja " . $number . " je " . $factorial;
        }
    ?>  
</body>
</html>
