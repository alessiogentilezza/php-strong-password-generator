<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>

<body class="bg-info">
    <?php

    require __DIR__ . '/function.php';

    if (isset($_GET['lunghezzaPassword'])) {
        $response = genera_parola_casuale($_GET['lunghezzaPassword']);
    };
    ?>

    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle">
            <form action="index.php" method="GET">
                <div class="mb-3">
                    <h3 class="text-white">Genera la tua password sicura scegliendone la lunghezza</h3>
                    <label for="lunghezzaPassword" class="form-label">Inserisci un numero da 8 a 32</label>
                    <input type="text" class="form-control" id="lunghezzaPassword" name="lunghezzaPassword" autocomplete="off"> <!-- valori min e max -->
                </div>
                <input class="btn btn-primary" type="submit" value="Submit">
                <input class="btn btn-warning" type="reset" value="Reset">
            </form>

            <?php
            if (isset($response)) {
            ?>
                <div class="alert alert-info mt-3" role="alert">
                    <?php echo $response ?>
                </div>
            <?php
            }
            ?>













        </div>








    </div>


</body>

</html>