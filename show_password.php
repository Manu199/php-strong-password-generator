<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Password</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: lightgray;
        }

        .content {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            margin-bottom:600px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
        }

        .password {
            font-size: 24px;
            font-weight: bold;
            color: green; 
            margin: 20px 0;
        }

        img {
            max-width: 200px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1 class="w-100 text-center fs-1 fw-semibold">Password Generated</h1>
        <p class="password">
            <?php
            session_start();
            if (isset($_SESSION['randomPassword'])) {
                $randomPassword = $_SESSION['randomPassword'];
                echo htmlspecialchars($randomPassword);
            } else {
                echo 'Nessuna password generata.';
            }
            ?>
        </p>
    </div>
</body>
</html>
