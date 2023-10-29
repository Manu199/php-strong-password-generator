<?php
// Definisci una funzione per generare una password casuale
function generateRandomPassword($length) {
    $minLength = 8;
    $maxLength = 32;

    if ($length < $minLength) {
        $length = $minLength;
    } elseif ($length > $maxLength) {
        $length = $maxLength;
    }

    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+[]{}|;:,.<>?';
    $password = '';
    $charactersLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }
    return $password;
}
?>
