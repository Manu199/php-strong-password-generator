<?php
    // Includi il file functions.php
    include 'functions.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Ottieni la lunghezza della password inviata tramite POST
        $passwordLength = isset($_POST['length']) ? intval($_POST['length']) : 12;

        // Genera una password casuale
        $randomPassword = generateRandomPassword($passwordLength);

        // Visualizza la password generata
        echo '<p>Password Casuale Generata: ' . htmlspecialchars($randomPassword) . '</p>';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Generatore Password Casuale</title>
</head>
<body>
    <h1 >Generatore Password Casuale</h1>

    <form method="POST">
        <label for="length">Lunghezza Password (min 8, max 32):</label>
        <input type="number" name="length" id="length" value="12" min="8" max="32">
        <button type="submit">Genera Password Casuale</button>
    </form>

</body>
</html>
