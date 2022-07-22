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
    <!-- Olimpia Milano - Cantù | 55-60 -->
    <?php 
        $matches = [
            [
              'teamOne' => 'Miami Heat',
              'teamTwo' => 'Boston',
              'scoreTeamOne' => 56,
              'scoreTeamTwo' => 34
            ],
            [
                'teamOne' => 'Chicago Bulls',
                'teamTwo' => 'Lakers',
                'scoreTeamOne' => 101,
                'scoreTeamTwo' => 121
            ],
            [
                'teamOne' => 'Wachington Wizards',
                'teamTwo' => 'Dallas Mavericks',
                'scoreTeamOne' => 98,
                'scoreTeamTwo' => 67
            ],
            [
                'teamOne' => 'Memphis Grizzlies',
                'teamTwo' => 'Indiana Pacers',
                'scoreTeamOne' => 84,
                'scoreTeamTwo' => 72
            ]
        ];
    ?>

    <?php for($i = 0; $i < count($matches); $i++) { ?> 
        <?php 
            $allMatches = $matches[$i];
        ?>

        <ul>
            <li>
                <div>
                    <span class="teams">
                        <?php echo $allMatches['teamOne']?> - 
                        <?php echo $allMatches['teamTwo']?> | 
                    </span>
                    <span class="scores">
                        <?php echo $allMatches['scoreTeamOne']?> -
                        <?php echo $allMatches['scoreTeamTwo']?>
                    </span>
                </div>
            </li>
        </ul>
        
    <?php } ?>
</body>
</html>