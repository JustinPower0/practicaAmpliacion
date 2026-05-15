<?php
$host = 'localhost';
$user = 'phpuser';
$pass = 'password123';
$db   = 'practica';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("<p>Error de connexió: " . $conn->connect_error . "</p>");
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Pràctica 0614</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .ok { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Hello World! 🚀</h1>
    <h2>Pràctica 0614 - GitHub Actions Deploy</h2>
    <p class="ok">✅ Servidor Apache funcionant</p>
    <p class="ok">✅ PHP funcionant</p>
    <p class="ok">✅ Connexió MySQL: <strong>OK</strong></p>
    <p><small>Desplegat automàticament amb GitHub Actions</small></p>
</body>
</html>
