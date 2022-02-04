<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
   <div class="square-grey">
        <?php 
            foreach ($db['teachers'] as $key => $teachers) {
                echo '<p>' . $teachers['name'] . '</p>' . '<p>' . $teachers['lastname'] . '</p>';
            }
        ?>
   </div>
   <div class="square-green">
        <?php 
            foreach ($db['pm'] as $key => $pm) {
                echo '<p>' . $pm['name'] . '</p>' . '<p>' . $pm['lastname'] . '</p>';
            }
        ?>
   </div>
</body>
</html>