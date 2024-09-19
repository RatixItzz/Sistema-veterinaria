<?php
include ('app/config.php');
include ('layout/parte1.php');
?>

 <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>

 <script>
    var a;
    var email_sesion ='<?php echo $email_sesion;?>';
    

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale:'es',
    editable: true,
    selectable: true,
    allDaySlot: false,
    events:'app/controllers/reserva/cargar_reservas.php',
    dateClick: function(info) {
        a = info.dateStr;
        const fechaComoCadena = a;
        var numeroDia = new Date(fechaComoCadena).getDay();
        var dias = ['LUNES','MARTES','MIERCOLES','JUEVES','VIERNES'];

        if ( (email_sesion == " ") )
        {
            $('#modal_sesion').modal("show");

        }else
        {
            if( (numeroDia == "5") ) {
                alert("No hay atencion los dias sabados");
            }else if( (numeroDia == "6") ) {
                alert("No hay atencion los dias domingos");
            }else {
                $('#modal_reserva').modal("show");
                $('#dia_de_la_semana').html(dias[numeroDia] + " " + a);

                var fecha = info.dateStr;
                var res = "";
                var url = "app/controllers/reserva/verificar_horario.php";

                $.get(url,{fecha:fecha},function (datos) {
                    res = datos;
                    $('#respuesta_horario').html(res);
                });

            }

        }

  },

  });
  calendar.render();
});

</script>

<section class="our-services">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <br><br>
            <h1 style="text-align: center" >Reserva una <b style="color: #0a58ca">Cita</b></h1>
            <br><br>
        </div>
    </div>
        <div class="row">
            <div id='calendar'></div>
        </div>
    </div>
</section>

<br>

<section class="map">
    <div class="">
        <br><br><h1 style="text-align: center">Encuentranos aquí</h1> <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120506.36655471595!2d-98.93557444999998!3d19.290020450000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1fd25df34895%3A0x116282b5827dfe1c!2zRXN0w6l0aWNhIGNhbmluYSDigJxMdW5h4oCd!5e0!3m2!1ses!2smx!4v1711534666499!5m2!1ses!2smx"
                width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>


<section class="contactos">
<div class="container">
    <br><br><h1 style="text-align: center">Contactanos</h1><br><br>
    <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <center><b>Escribenos aquí</b></center>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for=""><b>Nombre</b></label>
                                <input type="text" class="form-control" placeholder="Escribe tu nombre...">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for=""><b>Correo</b></label>
                                <input type="email" class="form-control" placeholder="Escribe tu correo...">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for=""><b>Mensaje</b></label>
                                <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <hr>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <div class="col-md-4"></div>
    </div>
    <br><br>
</div>
</section>

<?php
include ('layout/parte2.php');
include ('admin/layout/mensaje.php');
?>

<!-- Modal -->
<div class="modal fade" id="modal_sesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hola Bienvenido </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><h3>Para reservar cita nesesita iniciar sesion o registrarse</h3></p>
        <hr>
        <center>
            <div class="d-grid gap-2">
                <a href="<?php echo $URL;?>/login" class="btn btn-danger" type="button">Iniciar Sesion</a>
                <a href="<?php echo $URL;?>/login/registro.php" class="btn btn-danger" type="button">Registrate</a>
            </div>
        </center>
      </div>
      <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_formulario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Reserva tu cita para el dia <span id="dia_de_la_semana"></span> </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="container text-center">
                <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-6">
                    <label for="">Nombre del usuario</label>
                    <input type="text" class="form-control" value="<?php echo $nombre_completo_sesion; ?>" disabled>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-6">
                    <label for="">Correo electronico</label>
                    <input type="text" class="form-control" value="<?php echo $email_sesion; ?>" disabled>
                </div>
            </div>
            <br>
        <div class="row">
            <form action="<?php echo $URL;?>/app/controllers/reserva/controller_reservas.php" method="post">
                <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-6">
                    <label for="">Nombre de la Mascota <b>*</b></label>
                    <input type="text" name="nombre_mascota" class="form-control" required>
                    <input type="text" name="id_usuario" value="<?php echo $id_usuario_sesion;?>" hidden>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-6">
                <label for="">Tipo de servicio</label>
                <select name="tipo_servicio" id="" class="form-control">
                    <option value="Limpieza de dientes">Limpieza de dientes</option>
                    <option value="Vacuna">Vacuna</option>
                    <option value="Consulta">Consulta</option>
                    <option value="Baño y corte de uñas">Baño y corte de uñas</option>
                    <option value="Operacion">Operacion</option>
                </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-6">
                    <label for="">Fecha de reserva</label>
                    <input type="text" class="form-control" id="fecha_reserva" disabled>
                    <input type="text" name="fecha_cita" class="form-control" id="fecha_reserva2" hidden>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-6">
                <label for="">Hora de reserva</label>
                    <input type="text" class="form-control" id="hora_reserva" disabled>
                    <input type="text" name="hora_cita" class="form-control" id="hora_reserva2" hidden>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-warning">Registrar cita</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal_reserva" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Reserva tu cita para el dia <span id="dia_de_la_semana"></span> </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div id="respuesta_horario"></div>
        <div class="col-sm-6 col-md-5 col-lg-6">
            <center><b>Turnos de la mañana</b></center> 
            <br>
            <div class="d-grid gap-2">
                <button class="btn btn-warning" id="btn_h1" data-bs-dismiss="modal" type="button">08:00 - 09:00</button>
                <button class="btn btn-warning" id="btn_h2" data-bs-dismiss="modal" type="button">09:00 - 10:00</button>
                <button class="btn btn-warning" id="btn_h3" data-bs-dismiss="modal" type="button">10:00 - 11:00</button>
                <button class="btn btn-warning" id="btn_h4" data-bs-dismiss="modal" type="button">11:00 - 12:00</button>
            </div>
        </div>
        <div class="col-sm-6 col-md-5 col-lg-6">
            <center><b>Turnos de la tarde</b></center> 
            <br>
            <div class="d-grid gap-2">
                <button class="btn btn-warning" id="btn_h5" data-bs-dismiss="modal" type="button">14:00 - 15:00</button>
                <button class="btn btn-warning" id="btn_h6" data-bs-dismiss="modal" type="button">15:00 - 16:00</button>
                <button class="btn btn-warning" id="btn_h7" data-bs-dismiss="modal" type="button">16:00 - 17:00</button>
                <button class="btn btn-warning" id="btn_h8" data-bs-dismiss="modal" type="button">17:00 - 18:00</button>
            </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>


<script>
    $('#btn_h1').click(function () {
        $('#modal_formulario').modal("show");
        var fecha = "hola";
        $('#fecha_reserva').val(a);
        $('#fecha_reserva2').val(a);
        var h1 = "08:00 - 09:00";
        $('#hora_reserva').val(h1);
        $('#hora_reserva2').val(h1);

    });
    $('#btn_h2').click(function () {
        $('#modal_formulario').modal("show");
        var fecha = "hola";
        $('#fecha_reserva').val(a);
        $('#fecha_reserva2').val(a);
        var h2 = "09:00 - 10:00";
        $('#hora_reserva').val(h2);
        $('#hora_reserva2').val(h2);

    });
    $('#btn_h3').click(function () {
        $('#modal_formulario').modal("show");
        var fecha = "hola";
        $('#fecha_reserva').val(a);
        $('#fecha_reserva2').val(a);
        var h3 = "10:00 - 11:00";
        $('#hora_reserva').val(h3);
        $('#hora_reserva2').val(h3);

    });
    $('#btn_h4').click(function () {
        $('#modal_formulario').modal("show");
        var fecha = "hola";
        $('#fecha_reserva').val(a);
        $('#fecha_reserva2').val(a);
        var h4 = "11:00 - 12:00";
        $('#hora_reserva').val(h4);
        $('#hora_reserva2').val(h4);

    });
    $('#btn_h5').click(function () {
        $('#modal_formulario').modal("show");
        var fecha = "hola";
        $('#fecha_reserva').val(a);
        $('#fecha_reserva2').val(a);
        var h5 = "14:00 - 15:00";
        $('#hora_reserva').val(h5);
        $('#hora_reserva2').val(h5);

    });
    $('#btn_h6').click(function () {
        $('#modal_formulario').modal("show");
        var fecha = "hola";
        $('#fecha_reserva').val(a);
        $('#fecha_reserva2').val(a);
        var h6 = "15:00 - 16:00";
        $('#hora_reserva').val(h6);
        $('#hora_reserva2').val(h6);

    });
    $('#btn_h7').click(function () {
        $('#modal_formulario').modal("show");
        var fecha = "hola";
        $('#fecha_reserva').val(a);
        $('#fecha_reserva2').val(a);
        var h7 = "16:00 - 17:00";
        $('#hora_reserva').val(h7);
        $('#hora_reserva2').val(h7);

    });
    $('#btn_h8').click(function () {
        $('#modal_formulario').modal("show");
        var fecha = "hola";
        $('#fecha_reserva').val(a);
        $('#fecha_reserva2').val(a);
        var h8 = "17:00 - 18:00";
        $('#hora_reserva').val(h8);
        $('#hora_reserva2').val(h8);

    });
</script>