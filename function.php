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
