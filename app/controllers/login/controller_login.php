<?php

include ('../../config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM tb_usuarios WHERE email = '$email' ";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

$contador = 0;
$usuarioValido = false; // Variable para controlar si se encuentra un usuario válido
foreach ($usuarios as $usuario) {
    $contador = $contador + 1;
    $password_tabla = $usuario['password'];
    $hash = $password_tabla;

    if (password_verify($password, $hash)) {
        $usuarioValido = true; // Se encontró un usuario con las credenciales correctas
        $cargo = $usuario['cargo']; // Obtiene el cargo del usuario
        break; // Termina el bucle foreach al encontrar un usuario válido
    }
}

if ($usuarioValido) {
    echo "Bienvenido al sistema";
    session_start();
    $_SESSION['sesion_email'] = $email;

    if ($cargo === "ADMINISTRADOR") {
        header('Location: ' . $URL . '/admin'); // Redirección a /admin
    } else if ($cargo === "CLIENTE") {
        header('Location: ' . $URL . '/index.php'); // Redirección a /index
    } else {
        // Manejar caso de cargo no reconocido
        echo "Error: Cargo de usuario no reconocido.";
    }
} else {
    session_start();
    $_SESSION['mensaje'] = "El correo o la contraseña son incorrectos";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/index.php');
}

?>