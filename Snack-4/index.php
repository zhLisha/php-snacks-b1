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
        $paragraph = 'Quibusdam reiciendis maiores explicabo tenetur illum error aliquam quos pariatur itaque dicta. Aperiam earum a corporis facere, sapiente exercitationem aut! Consequuntur dolore veniam neque quas nemo exercitationem aliquam dignissimos repudiandae?
        Ea qui enim consequatur vitae id quasi cum, voluptas saepe omnis commodi molestiae veniam accusantium tempore. Pariatur laboriosam vel doloribus a eligendi, expedita autem, doloremque voluptatibus, optio quam explicabo veritatis!
        Culpa nam modi iure quaerat minus accusantium a at molestias, laudantium ipsam tenetur pariatur ullam ab ex ducimus! Ex eveniet ea quidem error minus ipsum modi consequatur est hic veniam.
        Eos eaque unde dignissimos dolores voluptates consequuntur architecto vitae itaque numquam, exercitationem maiores! Nesciunt a perferendis consequatur illo omnis, accusamus eaque distinctio harum amet laudantium molestias molestiae officia perspiciatis quia.
        Nam maiores quae facere, iusto, nisi consectetur libero corporis incidunt temporibus quisquam alias vel delectus repellendus, nobis illum repudiandae tenetur animi? Sequi eaque laboriosam soluta. Iure recusandae esse rerum a.
        Ipsa, provident necessitatibus a quibusdam aut expedita. Voluptate, soluta voluptatum. Pariatur, autem deleniti sed assumenda cumque aperiam magnam illum quaerat! Ex ducimus, perferendis ea nihil magnam ratione sequi praesentium unde.
        Asperiores non quidem accusantium, minus vitae porro fuga harum modi doloremque quisquam quia, incidunt illo at cupiditate ipsa consequatur autem debitis? Voluptatibus doloribus earum incidunt, facilis perspiciatis et libero accusamus.
        Harum beatae itaque perspiciatis, fugit corrupti reiciendis, autem facilis recusandae impedit ad dolores necessitatibus alias quae sequi officia earum magnam. Iste vitae maxime deserunt dignissimos voluptatum aut ex consectetur ullam.
        Commodi dolore magnam dolores natus ipsa soluta eum, ullam non iure corporis animi voluptatibus sint tempora voluptatum provident officia. Aliquam nisi sapiente beatae error doloribus quia consequuntur est quaerat? Illo.';
    ?>

    <!-- Not divided Paragraph -->
    <div class="entire-paragraph">
        <h2>Paragrafo intero</h2>
        <span>
            <?php echo $paragraph ?>
        </span>
    </div>

    <!-- Divided Paragraph -->
    <div class="divided-paragraph">
        <h2>Paragrafo diviso</h2>

        <span>
            <?php 
                foreach (explode(".",$paragraph) as $value) {
                    echo "$value. <br>";
                };
            ?>
        </span>
    </div>
</body>
</html>