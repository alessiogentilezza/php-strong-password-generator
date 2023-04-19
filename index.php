<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <?php


    function genera_parola_casuale($lunghezzaPassword)
    {
        $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+=-{}[]|\:;"<>,.?/~`';
        $parola = '';
        $caratteri_lunghezza = strlen($caratteri) - 1;
        for ($i = 0; $i < $lunghezzaPassword; $i++) {
            $carattere = $caratteri[mt_rand(0, $caratteri_lunghezza)];
            $parola .= $carattere;
        }
        return $parola;
    }

    if (isset($_GET['lunghezzaPassword']) && $_GET['lunghezzaPassword'] !== "string") {
        $response = genera_parola_casuale($_GET['lunghezzaPassword']);
    }
    ?>

    <div class="container">
        <form action="index.php" method="GET">
            <div class="mb-3">
                <label for="lunghezzaPassword" class="form-label">Lunghezza password</label>
                <input type="text" class="form-control" id="lunghezzaPassword" name="lunghezzaPassword">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
            <input class="btn btn-warning" type="reset" value="Reset">
        </form>

        <?php
        if (!empty($response)) {
        ?>
            <div class="alert alert-info mt-3" role="alert">
                <?php echo $response ?>
            </div>
        <?php
        }
        ?>
    </div>


</body>

</html>