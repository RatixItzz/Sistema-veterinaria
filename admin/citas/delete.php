<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php'); 
$id_reserva = $_GET['id_reserva'];
include('../../app/controllers/citas/datos_de_citas.php')
?>
    <br>
    <div class="container-fluid">

        <h1>Eliminacion de la cita</h1>
        
<div class="row">
  <div class="col-md-12">
    <div class="card card-outline card-danger">
      <div class="card-header">

        <h3 class="card-title"><b>¿Estas Seguro de eliminar la cita ?</b></h3>
      </div>
      <div class="card-body">
          <div class="row">           
            <div class="col-md-4">
              <div class="form-group">
                <label for="">id_usuario</label>
                <input type="text" name="id_usuario" class="form-control" value="<?php echo $id_usuario; ?>" disabled> 
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="">Nombre de la Mascota</label>
                <input type="text" name="nombre_mascota" class="form-control" value="<?= $nombre_mascota?>"  disabled>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="">Tipo de servicio</label>
                <input type="text" name="nombre_mascota" class="form-control" value="<?= $tipo_servicio?>" disabled>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                    <label for="">Fecha de reserva</label>
                    <input type="text" name="fecha_cita" class="form-control" value="<?= $fecha_cita?>" disabled >
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="">Hora de reserva</label>
                <input type="text" name="hora_cita" class="form-control" value="<?= $hora_cita?>" disabled>
              </div>
            </div>
        
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../../app/controllers/citas/delete.php" method="post">
                                        <input type= "text" value="<?= $id_reserva ?>" name="id_reserva" hidden>
                                        <a href="" class="btn btn-secondary">Cancelar</a>
                                        <input type="submit" class="btn btn-danger" value="Borrar Cita">
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include ('../../admin/layout/parte2.php');
include ('../../admin/layout/mensaje.php');
?>