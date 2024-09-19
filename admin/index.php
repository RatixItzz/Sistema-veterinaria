<?php
include ('../app/config.php');
include ('../admin/layout/parte1.php');
include ('../app/controllers/usuarios/listado_de_usuarios.php'); 
include ('../app/controllers/productos/listado_de_productos.php'); 
include ('../app/controllers/citas/listado_de_citas.php'); 
?>
<br>
<h2>Bienvenido a nuestra Veterinaria - <?=$cargo_sesion;?> </h2>
<hr>

<div class="containar-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
                $contador_de_usuarios = 0;
                foreach ($usuarios as $usuario) {
                    $contador_de_usuarios = $contador_de_usuarios +1;

                }
                
                ?>
                <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?=$contador_de_usuarios;?></font></font></h3>

                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuarios Registrados</font></font></p>
              </div>
              <div class="icon">
                <i class="bi bi-file-earmark-person-fill" style="color:white" ></i>
              </div>
              <a href="<?=$URL."/admin/usuarios";?>" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Más información</font></font><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
              <?php
                $contador_de_productos = 0;
                foreach ($productos as $producto) {
                    $contador_de_productos = $contador_de_productos +1;

                }
                ?>
                <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?=$contador_de_productos;?></font></font></h3>

                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Productos Registrados</font></font></p>
              </div>
              <div class="icon">
                <i class="bi bi-basket2-fill" style="color:white"></i>
              </div>
              <a href="<?=$URL."/admin/productos";?>" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Más información</font></font><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
    </div>
</div>

<div class="containar-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
                $contador_de_citas = 0;
                foreach ($citas as $cita) {
                    $contador_de_citas = $contador_de_citas+1;

                }
                
                ?>
                <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?=$contador_de_citas;?></font></font></h3>

                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Citas Registradas</font></font></p>
              </div>
              <div class="icon">
                <i class="bi bi-file-earmark-person-fill" style="color:white" ></i>
              </div>
              <a href="<?=$URL."/admin/citas";?>" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Más información</font></font><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
       </div>  
     </div>
    </div>
  </div>
        
<?php include ('../admin/layout/parte2.php');

