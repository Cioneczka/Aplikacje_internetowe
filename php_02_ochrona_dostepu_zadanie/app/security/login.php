<?php
require_once dirname(__FILE__).'/../../config.php';
session_start();

// Definicja użytkowników
$users = array(
    'admin' => 'admin',
    'user' => 'user'
);

$login = $_POST['login'];
$pass = $_POST['pass'];

$messages = [];

if (!isset($login) || !isset($pass)) {
    $messages[] = 'Nie podano loginu lub hasła.';
}

if (empty($messages)) {
    // Sprawdzenie loginu i hasła
    if (isset($users[$login]) && $users[$login] === $pass) {
        // Logowanie zakończone sukcesem
        $_SESSION['user'] = $login;
        header("Location: "._APP_URL."/app/calc_view.php");
    } else {
        // Błąd logowania
        $messages[] = 'Niepoprawny login lub hasło.';
    }
}

// Jeśli są błędy, wyświetl login_view.php ponownie
include 'login_view.php';
?>
