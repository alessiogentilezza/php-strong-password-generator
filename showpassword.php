<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Mostra Password</title>
</head>

<body>
    <div class="container">
        <?php if (isset($_SESSION['password'])) { ?>
            <div class="alert alert-info mt-3" role="alert">
                <h2>Questa è la tua nuova password!</h2>
                <?php echo $_SESSION['password'] ?>
            </div>
        <?php } ?>
    </div>
</body>

</html>