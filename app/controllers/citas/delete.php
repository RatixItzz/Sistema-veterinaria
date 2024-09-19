<?php

include ('../../../app/config.php');

// Recepción del ID del usuario
$id_reserva = $_POST['id_reserva'];

$sentencia = $pdo->prepare("DELETE FROM tb_reserva WHERE id_reserva = '$id_reserva' ");


if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se elimino la cita  de manera correcta en la base de datos";
    $_SESSION['icono'] = 'success';
    header('Location: '.$URL.'/admin/citas');
} else{
    session_start();
    $_SESSION['mensaje'] = "Error al eliminar la cita: ";
    $_SESSION['icono'] = 'error';
    header('Location: '.$URL.'/admin/citas');

}

?>
