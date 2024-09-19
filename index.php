<?php
include ('app/config.php');
include ('layout/parte1.php');
include ('app/controllers/productos/listado_de_productos.php');
?>


<section>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn.pixabay.com/photo/2020/04/04/19/52/medicine-5003631_1280.jpg" height="600px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a href="<?php echo $URL;?>/reservar.php" class="btn btn-outline-info btn-lg">Reservar cita</a>
                    <h5>Cuidamos a tu mascota</h5>
                    <p>El personal de la veterinaria es amable y profesional. las enfermeras veterinarias son amables y compasivas, y siempre están dispuestas a ayudar a los animales y a sus dueños.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2020/03/17/13/57/veterinary-4940425_1280.jpg" height="600px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Instalaciones</h5>
                    <p>La veterinaria es un centro de atención médica para animales, el edificio está limpio y bien cuidado, con un amplio estacionamiento en la parte trasera.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2013/11/23/01/05/bernese-mountain-dog-216113_1280.jpg" height="600px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>La sala de espera</h5>
                    <p>La sala de espera es amplia y luminosa, con cómodos sofás y sillas. Hay una mesa de café con revistas y libros sobre animales.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2020/03/31/16/18/cat-4988407_1280.jpg" height="600px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>La sala de examen</h5>
                    <p>La sala de examen es pequeña pero está bien equipada con todo el equipo necesario para examinar y tratar animales. Hay una mesa de examen, un lavabo y un armario con suministros médicos.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</section>

<section class="info">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <center>
                    <br><br>
                    <img src="public/images/img1.png" width="100%" alt="">
                </center>
            </div>
            <div class="col-md-4 col-sm-12">
                <br><br><br>
                <h1>Acerca de nuestra <spna style="color: #2431ad">veterinaria</spna></h1>
                <br>
                <p style="text-align: justify">Lorem Ipsum es simplemente un texto ficticio de la industria de la impresión y la composición tipográfica. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde que Lorem Ipsum es simplemente texto ficticio de la industria de la impresión y la composición tipográfica. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde la</p>
                <a href="" class="btn btn-outline-primary btn-lg">Mas sobre nosotros</a>
                <br><br>
            </div>
        </div>
    </div>
</section>


<section class="our-services" style="background-color: black">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <br><br>
            <h1> <b style="color: white">Nuestros</b><b style="color: #0a58ca"> Productos</b></h1>
            <br><br>
        </div>
    </div>
        <div class="row">
            <?php
            foreach ($productos as $producto){
                
                ?>
                <div class="col-md-3 zoomP">
                <div class="card">
                    <img src="<?=$URL."/public/images/productos/".$producto['imagen'];?>"
                        height="220px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$producto['nombre_producto'];?></h5>
                        <p class="card-text"><?=$producto['descripcion'];?></p>
                        <p style="Color: black"> <b> MX$ <?=$producto['precio_venta'];?></b></p>
                    </div>
                </div>
                <br>
            </div>
            <?php
            }
            ?>

        </div>
    </div>
    <br>
</section>




<section class="our-services">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <br><br>
            <h1>Nuestros <b style="color: #0a58ca">Servicios</b></h1>
            <br><br>
        </div>
    </div>
        <div class="row">
            <div class="col-md-3 zoomP">
                <div class="card">
                    <img src="https://img.freepik.com/foto-gratis/lindo-mascota-collage-aislado_23-2150007407.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                        height="220px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vacunas</h5>
                        <p class="card-text">Las vacunas ayudan a proteger a las mascotas de enfermedades contagiosas.</p>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-3 zoomP">
                <div class="card">
                    <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-perro_23-2149100178.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                         height="220px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Odontología</h5>
                        <p class="card-text">El cuidado dental es importante para la salud general de las mascotas.</p>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-3 zoomP">
                <div class="card">
                    <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-mascota_23-2149143882.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                         height="220px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Peluquería canina</h5>
                        <p class="card-text">La peluquería canina puede ayudar a mantener a las mascotas limpias, arregladas y saludables.</p>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-3 zoomP">
                <img src="https://img.freepik.com/vector-gratis/adopta-plantilla-poster-mascotas_23-2148931292.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                     width="100%" alt="">
            </div>
        </div>
    </div>
</section>

<br>

<section class="gallery">
    <div class="container">
        <br><br>
        <h1>Galle<b style="color: #0a58ca">ria</b></h1>
        <br><br>
        <div class="row">
            <div class="col-md-4 zoomP">
                <center>
                    <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-perro_23-2149100197.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                         width="100%" height="350px" alt="">
                    <br><br>
                </center>
            </div>
            <div class="col-md-8 zoomP">
                <center>
                    <img src="https://img.freepik.com/foto-gratis/coleccion-retratos-adorables-cachorros_53876-145628.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                         width="100%" height="350px"  alt=""><br><br>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 zoomP">
                <center>
                    <img src="https://img.freepik.com/foto-gratis/perro-siendo-revisado-veterinario-tienda-mascotas_23-2148872560.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                         width="100%" height="350px" alt=""><br><br>
                </center>
            </div>
            <div class="col-md-4 zoomP">
                <center>
                    <img src="https://img.freepik.com/foto-gratis/mujer-corta-perro-perro-sentado-sofa-raza-yorkshire-terrier_1157-46558.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                         width="100%" height="350px" alt=""><br><br>
                </center>
            </div>
            <div class="col-md-4 zoomP">
                <center>
                    <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-gato_23-2149100168.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                         width="100%" height="350px" alt=""><br><br>
                </center>
            </div>
        </div>
    </div>
    <br><br>
</section>

<section class="clients">
    <div class="container">
        <br><br>
        <h1 style="text-align: center">Testimonios de Clientes</h1> <br><br>
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="https://mundovets.com/wp-content/uploads/2023/05/consejos-optimizar-flujo-pacientes-veterinaria-1024x683.jpg"
                                         height="220px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Testimonio</h5>
                                        <p class="card-text">Mi perro Toby se enfermó gravemente y lo llevé a la veterinaria La Esperanza. El personal fue muy amable y compasivo, y se tomó el tiempo para explicarme todo sobre su condición. Toby recibió el mejor cuidado posible y ahora está completamente recuperado. Estoy muy agradecida por la atención que recibió en La Esperanza.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="https://i0.wp.com/blog.divinaseguros.com/wp-content/uploads/2023/09/seguro-perro.jpg?fit=740%2C479&ssl=1"
                                         height="220px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Testimonio</h5>
                                        <p class="card-text">Llevo a mi gato Simba a la veterinaria La Esperanza para sus chequeos regulares y vacunas. El personal siempre es muy amable y profesional, y Simba se siente muy cómodo allí. Recomiendo encarecidamente La Esperanza a cualquier persona que busque un veterinario de confianza para su mascota.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="https://www.portalveterinaria.com/upload/20240209100216SANTEVETvalentin.jpg"
                                         height="220px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Testimonio</h5>
                                        <p class="card-text">Mi perro Max se lesionó la pata y lo llevé a la veterinaria La Esperanza. El veterinario lo examinó cuidadosamente y le diagnosticó un esguince. Le puso un vendaje y me dio instrucciones para cuidarlo en casa. Max se recuperó rápidamente y ahora está de nuevo correteando por ahí. Estoy muy satisfecho con la atención que recibió en La Esperanza.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="https://mundoejecutivo.com.mx/wp-content/uploads/2023/07/image-32.jpg"
                                         height="220px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Testimonio</h5>
                                        <p class="card-text">Tuve que llevar a mi gato Luna a la veterinaria La Esperanza para que le extirparan un bulto. Estaba muy nerviosa, pero el personal me tranquilizó y me explicó todo el procedimiento. Luna se recuperó muy bien y ahora está sana y feliz. Estoy muy agradecida por la atención que recibió en La Esperanza.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-mascota_23-2149143882.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                                         height="220px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Testimonio</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-mascota_23-2149143882.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                                         height="220px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Testimonio</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-mascota_23-2149143882.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                                         height="220px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Testimonio</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-mascota_23-2149143882.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                                         height="220px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Testimonio</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-mascota_23-2149143882.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                                         height="220px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Testimonio</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </div>
</section>


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
