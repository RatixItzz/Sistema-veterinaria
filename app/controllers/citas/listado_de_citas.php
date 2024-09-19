<?php
$sql = "SELECT * FROM tb_reserva";
$query = $pdo->prepare($sql);
$query->execute();
$citas = $query->fetchAll(PDO::FETCH_ASSOC);


