<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->
<?php
    $posts = [
        '10/12/2021' => [
            [ 
            'title' => 'Post-1',
            'author' => 'Marco',
            'description' => 'lorem ipsum'
            ],
            [ 
            'title' => 'Post-2',
            'author' => 'Mario',
            'description' => 'lorem'
            ],
        ],
        '21/01/2022' => [
            [ 
            'title' => 'Post-3',
            'author' => 'Anna',
            'description' => 'Dolor sit'
            ],
            [ 
            'title' => 'Post-4',
            'author' => 'Francesco',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis incidunt earum placeat temporibus, sunt deleniti consequatur facere repellendus sit quod hic eius, ipsa, iure nobis dolorem fugiat nihil cupiditate itaque?'
            ],
        ],
    ];

    foreach ($posts as $key => $post) {
        echo '<p>' . $key . '</p>';
        foreach ($post as $singlePost) {
            echo '<ul>';
            echo '<li>' . $singlePost['title'] . '</li>';
            echo '<li>' . $singlePost['author'] . '</li>';
            echo '<li>' . $singlePost['description'] . '</li>';
            echo '</ul>';
        }    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>