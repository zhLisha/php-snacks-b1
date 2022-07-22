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
        $students = [
            [
                'name' => 'Susanna',
                'lastName' => 'Capra',
                'schoolMark' => [
                    'math' => 8,
                    'history' => 6,
                    'gym' => 7,
                    'physics' => 3
                ]
            ],
            [
                'name' => 'Karen',
                'lastName' => 'Suchpain',
                'schoolMark' => [
                    'math' => 7,
                    'history' => 2,
                    'gym' => 8,
                    'physics' => 6
                ]
            ],
            [
                'name' => 'Logan',
                'lastName' => 'Creepy',
                'schoolMark' => [
                    'math' => 5,
                    'history' => 6,
                    'gym' => 8,
                    'physics' => 5
                ]
            ],
            [
                'name' => 'Samantha',
                'lastName' => 'Soboring',
                'schoolMark' => [
                    'math' => 10,
                    'history' => 7,
                    'gym' => 3,
                    'physics' => 10
                ]
            ],
            [
                'name' => 'Benedict',
                'lastName' => 'Theonlyone',
                'schoolMark' => [
                    'math' => 7,
                    'history' => 5,
                    'gym' => 9,
                    'physics' => 8
                ]
            ],
            
        ];
    ?>


    <div class="students-list">
        <ul>
            <?php for ($i = 0; $i < count($students); $i++) { ?>
                <?php 
                    $thisStudent = $students[$i] ;
                    
                    $sum = 0;

                    foreach($thisStudent['schoolMark'] as $val) {
                        $sum += $val;
                    }

                    $average = $sum / count($thisStudent['schoolMark']);
                ?>

                <li>
                    <?php echo $thisStudent['name'] ?>
                    <?php echo $thisStudent['lastName'] ?>
                    <?php echo $average ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>