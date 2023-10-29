<?php
    include 'functions.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Ottengo la lunghezza della password inviata tramite POST
        $passwordLength = isset($_POST['length']) ? intval($_POST['length']) : 12;

        // Genero una password casuale
        $randomPassword = generateRandomPassword($passwordLength);

        // Salvo la password generata nella sessione
        $_SESSION['randomPassword'] = $randomPassword;

        // Eseguo un redirect verso una pagina dedicata usando header
        header('Location: show_password.php');
        exit;
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
    <div>

        <h1 class="w-100 text-center fs-1 my-5 fw-semibold" >Generatore Password Casuale</h1>

        <div class="w-100 text-center">

            <form method="POST">
                <label for="length" class="my-2 tip">Lunghezza Password (min 8, max 32):</label>
                <br>
                <input type="number" name="length" id="length" value="12" min="8" max="32" class="numero">
                <button type="submit" class="genera">Genera Password Casuale</button>
            </form>
        </div>
    </div>


    <style>

        html{
            background-color: lightgray;
        }
        div{
            background-color: lightgray;

        }
       
        .genera  {
  
            display: inline-block;
            outline: none;
            cursor: pointer;
            font-size: 14px;
            line-height: 1;
            border-radius: 500px;
            transition-property: background-color,border-color,color,box-shadow,filter;
            transition-duration: .3s;
            border: 1px solid transparent;
            letter-spacing: 2px;
            min-width: 160px;
            text-transform: uppercase;
            white-space: normal;
            font-weight: 700;
            text-align: center;
            padding: 16px 14px 18px;
            color: #616467;
            box-shadow: inset 0 0 0 2px #616467;
            background-color: transparent;
            height: 48px;
           
        }
        .genera:hover{
                color: #fff;
                background-color: #616467;
            }

        .numero{
            display: inline-block;
            outline: none;
            cursor: pointer;
            font-size: 14px;
            line-height: 1;
            border-radius: 500px;
            border: 1px solid transparent;
            letter-spacing: 2px;
            min-width: 160px;
            white-space: normal;
            font-weight: 700;
            text-align: center;
            padding: 16px 14px 18px;
            color: #616467;
            box-shadow: inset 0 0 0 2px #616467;
            background-color: transparent;
            height: 48px;
        }

        .tip {
            font-size: 1.3rem;
            color: gray;
            padding-bottom: 10px;
        }
            
    </style>
</body>
</html>
