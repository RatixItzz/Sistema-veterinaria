<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');
$id_reserva = $_GET['id_reserva'];
include('../../app/controllers/citas/datos_de_citas.php')

?>

    <br>
    <div class="container-fluid">

<h1>Actualizacion de una cita</h1>

<div class="row">
  <div class="col-md-12">
    <div class="card card-outline card-sucess">
      <div class="card-header">

        <h3 class="card-title"><b>Datos de la cita <b>*</b></b></h3>
      </div>
      <div class="card-body">
        <form action="../../app/controllers/citas/update.php" method="post">

          <div class="row">           
            <div class="col-md-4">
              <div class="form-group">
                <label for="">id_usuario<b>*</b></label>
                <input type="text" name="id_usuario" class="form-control" value="<?php echo $id_usuario; ?>"  required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="">Nombre de la Mascota<b>*</b></label>
                <input type="text" name="nombre_mascota" class="form-control" value="<?= $nombre_mascota;?>" required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="">Tipo de servicio<b>*</b></label>
                    <select name="tipo_servicio" id="" class="form-control" value="<?= $tipo_servicio;?>"  required>
                        <option value="Limpieza de dientes">Limpieza de dientes</option>
                        <option value="Vacuna">Vacuna</option>
                        <option value="Consulta">Consulta</option>
                        <option value="Baño y corte de uñas">Baño y corte de uñas</option>
                         <option value="Operacion">Operacion</option>
                    </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                    <label for="">Fecha de reserva<b>*</b></label >
                    <input type="date" name="fecha_cita" class="form-control" value="<?= $fecha_cita; ?>" required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="">Hora de reserva<b>*</b></label>
                    <select name="hora_cita" id="" class="form-control" value="<?= $hora_cita; ?>">
                        <option value="08:00 - 09:00">08:00 - 09:00</option>
                        <option value="09:00 - 10:00">09:00 - 10:00</option>
                        <option value="10:00 - 11:00">10:00 - 11:00</option>
                        <option value="11:00 - 12:00">11:00 - 12:00</option>
                        <option value="14:00 - 15:00">14:00 - 15:00</option>
                        <option value="15:00 - 16:00">15:00 - 16:00</option>
                        <option value="16:00 - 17:00">16:00 - 17:00</option>
                        <option value="17:00 - 18:00">17:00 - 18:00</option>
                    </select>
              </div>
            </div>
            <input type= "text" value="<?= $id_reserva ?>" name="id_reserva" hidden>
        
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="http://localhost/www.sistemadeveterinario.com/admin/" class="btn btn-sucess">Cancelar</a>
                                    <input type="submit" class="btn btn-success" value="Actualizar cita">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include ('../../admin/layout/parte2.php');
include ('../../admin/layout/mensaje.php');
?>