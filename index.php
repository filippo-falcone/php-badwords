<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <h1>PHP Badwords</h1>
        <form action="censored.php" method="GET">
            <textarea name="paragraph" cols="30" rows="10" placeholder="Inserisci un paragrafo"></textarea>
            <div class="input-container">
                <button type="submit">Invia</button>
                <input name="word" type="text" placeholder="Inserisci la parola che vuoi censurare">
            </div>
        </form>
    </div>
</body>
</html>