<?php
$sql = "SELECT * FROM tb_reserva WHERE id_reserva = '$id_reserva' ";
$query = $pdo->prepare($sql);
$query->execute();
$citas = $query->fetchAll(PDO::FETCH_ASSOC);


foreach ($citas as $cita){
    $id_usuario = $cita['id_usuario'];
    $nombre_mascota = $cita['nombre_mascota'];
    $tipo_servicio = $cita['tipo_servicio'];
    $fecha_cita = $cita['fecha_cita'];
    $hora_cita = $cita['hora_cita'];
    $title = $tipo_servicio;
    $start = $fecha_cita;
    $end = $fecha_cita;
    $color = "black";
}