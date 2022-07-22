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
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];
    ?>

    <div class="container flex">
        <ul class="teachers-box">
            <?php for($i = 0; $i < count($db['teachers']); $i++) { ?>
                
                <?php 
                    $eachTeacher = $db['teachers'][$i]; 
                ?>
                    <li>
                        <?php echo $eachTeacher['name'] ?>
                        <?php echo $eachTeacher['lastname'] ?>
                    </li>
            
            <?php } ?>
        </ul>

        <ul class="pm-box">
            <?php for($i = 0; $i < count($db['pm']); $i++) { ?>
                    
                <?php 
                    $eachTeacher = $db['pm'][$i]; 
                ?>
                    <li>
                        <?php echo $eachTeacher['name'] ?>
                        <?php echo $eachTeacher['lastname'] ?>
                    </li>
            
            <?php } ?>
        </ul>
    </div>
</body>
</html>