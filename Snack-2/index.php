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
    <?php
        $name = $_GET["name"];
        $email = $_GET["email"]; 
        $age = $_GET["age"];


        // If the name's length is > than 3 letters, email contains @ and age is a number
        if(strlen($name) > 3 && strpos($email, '@') && strpos($email, '.') && is_numeric($age)) {
            // Then the result is: 
            echo 'Accesso riuscito';
        } 
        // Else the resulti is:
        else {
            echo 'Accesso negato';
        };
    ?>  
</body>
</html>