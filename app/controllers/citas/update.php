<?php
include ('../../config.php');


$id_usuario = $_POST['id_usuario'];
$nombre_mascota = $_POST['nombre_mascota'];
$tipo_servicio = $_POST['tipo_servicio'];
$fecha_cita = $_POST['fecha_cita'];
$hora_cita = $_POST['hora_cita'];
$title = $tipo_servicio;
$start = $fecha_cita;
$end = $fecha_cita;
$color = "black";
$id_reserva = $_POST['id_reserva'];


$sentencia = $pdo->prepare('UPDATE tb_reserva
SET id_usuario=:id_usuario,
nombre_mascota=:nombre_mascota,
tipo_servicio=:tipo_servicio,
fecha_cita=:fecha_cita,
hora_cita=:hora_cita,
title=:title,
start=:start,
end=:end,
color=:color,
fyh_actualizacion=:fyh_actualizacion
WHERE id_reserva=:id_reserva');


$sentencia->bindParam(':id_usuario', $id_usuario);
$sentencia->bindParam(':nombre_mascota', $nombre_mascota);
$sentencia->bindParam(':tipo_servicio', $tipo_servicio);
$sentencia->bindParam(':fecha_cita', $fecha_cita);
$sentencia->bindParam(':hora_cita', $hora_cita);
$sentencia->bindParam(':title', $title);
$sentencia->bindParam(':start', $start);
$sentencia->bindParam(':end', $end);
$sentencia->bindParam(':color', $color);
$sentencia->bindParam(':fyh_actualizacion', $fechaHora);
$sentencia->bindParam(':id_reserva', $id_reserva);

if ($sentencia->execute()) {
    echo "Se actualizó correctamente";

    session_start();
    $_SESSION['mensaje'] = "Se actualizó correctamente";
    $_SESSION['icono'] = 'success';

    header('Location: ' . $URL . '/admin/citas/');
} else {
    echo "No se pudo actualizar la cita";
    session_start();
    $_SESSION['mensaje'] = "No se pudo actualizar la cita";
    $_SESSION['icono'] = 'error';

}
