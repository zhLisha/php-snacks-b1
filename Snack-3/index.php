<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
 <!-- Create an array containing 15 random number -->
    <?php 
        // Empty array
        $randomNumber = [];

        while(count($randomNumber) < 15) {
            // Generate 15 random number
            $numbers = rand(1, 100);

            // Add $numbers in $randomNumber if it doesn't already contain the random number
            if(!in_array($numbers, $randomNumber)) {
                $randomNumber[] = $numbers; 
            };
        };

        // Prints
        foreach ($randomNumber as $val) {
            echo "$val <br>";
        };

        // var_dump($randomNumber)
    ?>
</body>
</html>