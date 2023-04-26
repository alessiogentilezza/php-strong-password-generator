<?php
function genera_parola_casuale($lunghezzaPassword)
{
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+=-{}[]|\:;"<>,.?/~`';
    $caratteri_lunghezza = strlen($caratteri);

    if (empty((int)$lunghezzaPassword)) {
        $result = "il parametro della lunghezza della password non è valido!";
    } elseif ($lunghezzaPassword < 8 || $lunghezzaPassword > 32) {
        $result = "la lunghezza della password deve essere compressa tra 8 e 32!";
    } else {

        $password = '';

        for ($i = 0; $i < $lunghezzaPassword; $i++) {
            $index = mt_rand(0, $caratteri_lunghezza);
            $password .= $caratteri[$index];
        }
        $result = $password;

        session_start();
        $_SESSION['password'] = $password;
        header('location:showpassword.php');
    }

    return $result;
}
