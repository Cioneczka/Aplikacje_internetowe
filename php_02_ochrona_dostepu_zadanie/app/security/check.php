<?php
session_start();

if (!isset($_SESSION['user'])) {
    // Jeśli użytkownik nie jest zalogowany, przekieruj na stronę logowania
    header("Location: "._APP_URL."/app/security/login_view.php");
    exit();
}
?>
