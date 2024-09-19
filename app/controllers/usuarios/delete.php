<?php

include ('../../../app/config.php');

// Recepción del ID del usuario
$id_usuario = htmlspecialchars($_POST['id_usuario']);

// Verificación de registros dependientes
$sql_verificar = "SELECT COUNT(*) FROM tb_productos WHERE id_usuario = '$id_usuario'";
$resultado_verificar = $pdo->query($sql_verificar);
$numero_registros_dependientes = $resultado_verificar->fetchColumn();

if ($numero_registros_dependientes > 0) {
    session_start();
    $_SESSION['mensaje'] = "No se puede eliminar el usuario porque tiene registros asociados en otras tablas. Elimine los registros dependientes antes de intentar eliminar el usuario.";
    $_SESSION['icono'] = 'warning';
    header('Location: '.$URL.'/admin/usuarios');
    exit();
}

// Mensaje de confirmación
echo "<script>
function confirmarEliminar() {
    // Mostrar un modal con un mensaje de confirmación
    // Si el usuario confirma, ejecutar la consulta DELETE
}
</script>";

// Preparación de la consulta SQL
$sentencia = $pdo->prepare("DELETE FROM tb_usuarios WHERE id_usuario = :id_usuario");
$sentencia->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);

// Ejecución de la consulta
try {
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se elimino de la manera correcta en la base de datos";
    $_SESSION['icono'] = 'success';
} catch (PDOException $e) {
    session_start();
    $_SESSION['mensaje'] = "Error al eliminar el usuario: " . $e->getMessage();
    $_SESSION['icono'] = 'error';
}

// Redirección al usuario
header('Location: '.$URL.'/admin/usuarios');

?>
