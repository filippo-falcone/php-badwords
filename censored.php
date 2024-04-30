<?php
$paragraph = $_GET['paragraph'];
$censoredWord = $_GET['word'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bardwords</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <h1>PHP Badwords</h1>
        <h2>Paragrafo</h2>
        <div class="card">
            <p><?php echo $paragraph; ?></p>
            <p>Lunghezza paragrafo: [Number]</p>
        </div>
        <h2 class="censored">Paragrafo Censurato</h2>
        <div class="card">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum sunt nulla ducimus praesentium nam, laudantium doloribus voluptate recusandae necessitatibus sequi quis. Minima nobis odit, enim perspiciatis porro sint ipsa saepe.</p>
        </div>
    </div>
</body>
</html>