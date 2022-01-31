<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
<?php
  $paragraph = ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea facere ipsum odit suscipit atque sapiente enim. Quasi soluta dolor delectus excepturi vero dolores. Quisquam, quam? Atque qui fugiat deleniti quod!  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea facere ipsum odit suscipit atque sapiente enim. Quasi soluta dolor delectus excepturi vero dolores. Quisquam, quam? Atque qui fugiat deleniti quod!';
  $newParagraph = explode('.', $paragraph);
    foreach ($newParagraph as $singleParagraph) {
        echo '<p> Paragrafo suddiviso:' . $singleParagraph . '</p>';
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
    <h1>Paragrafo: <?php echo $paragraph; ?></h1>
</body>
</html>