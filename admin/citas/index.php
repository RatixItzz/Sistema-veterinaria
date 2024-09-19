<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');
include ('../../app/controllers/citas/listado_de_citas.php'); ?>

    <br>
    <div class="container-fluid">
        <h1>Listado de Citas</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><b>Citas registradas</b></h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Nro</th>
                                    <th style="text-align: center">id_usuario</th>
                                    <th style="text-align: center">nombre_mascota</th>
                                    <th style="text-align: center">tipo_servicio</th>
                                    <th style="text-align: center">fecha_cita</th>
                                    <th style="text-align: center">hora_cita</th>
                                    <th style="text-align: center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $contador = 0;
                            foreach ($citas as $cita){
                                $contador = $contador + 1;
                                $id_reserva = $cita['id_reserva'];
                                ?>
                                <tr>
                                    <td><?php echo $contador; ?></td>
                                    <td><?php echo $cita['id_usuario']; ?></td>
                                    <td><?php echo $cita['nombre_mascota']; ?></td>
                                    <td><?php echo $cita['tipo_servicio']; ?></td>
                                    <td><?php echo $cita['fecha_cita']; ?></td>
                                    <td><?php echo $cita['hora_cita']; ?></td>
                                    <td style="text-align: center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="show.php?id_reserva=<?php echo $id_reserva; ?>" class="btn btn-info"><i class="bi bi-eye-fill"></i> Ver</a>
                                            <a href="update.php?id_reserva=<?php echo $id_reserva;?>" type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i> Editar</a>
                                            <a href="delete.php?id_reserva=<?php echo $id_reserva;?>" type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i> Borrar</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>

                        <br><br>


                    </div>
                </div>
            </div>
        </div>



    </div>

<?php
include ('../../admin/layout/parte2.php');
include ('../../admin/layout/mensaje.php');
?>

<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Citas",
                "infoEmpty": "Mostrando 0 a 0 de 0 Citas",
                "infoFiltered": "(Filtrado de _MAX_ total Citas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Citas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                    text: 'Copiar',
                    extend: 'copy',
                }, {
                    extend: 'pdf'
                },{
                    extend: 'csv'
                },{
                    extend: 'excel'
                },{
                    text: 'Imprimir',
                    extend: 'print'
                }
                ]
            },
                {
                    extend: 'colvis',
                    text: 'Visor de columnas',
                    collectionLayout: 'fixed three-column'
                }
            ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
