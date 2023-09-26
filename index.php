<?php 
    declare(strict_types = 1);
    
    require 'includes/app.php';
    inculirTemplate('header', $inicio = true);
    
?>

    <main class="contenedor  seccion">
        <h1>Mas sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus eaque sed consequuntur vel dolorem repudiandae accusamus pariatur, ex hic vitae exercitationem rerum, nostrum illo explicabo perferendis a nisi aliquam soluta?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus eaque sed consequuntur vel dolorem repudiandae accusamus pariatur, ex hic vitae exercitationem rerum, nostrum illo explicabo perferendis a nisi aliquam soluta?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Timepo" loading="lazy">
                <h3>A Timepo</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus eaque sed consequuntur vel dolorem repudiandae accusamus pariatur, ex hic vitae exercitationem rerum, nostrum illo explicabo perferendis a nisi aliquam soluta?</p>
            </div>

        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Departamentos en Venta</h2>

        <?php  
            include 'includes/templates/anuncios.php' 
        ?>

        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad.</p>
        <a href="contacto.html" class="boton-amarillo">Contactános</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img src="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Esrito el: <span>20/05/2023</span> por: <span>Admin</span></p>
                    </a>

                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.
                    </p>
                </div>
            </article><!--.entrada-blog-->
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img src="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Esrito el: <span>20/05/2023</span> por: <span>Admin</span></p>
                    </a>

                    <p>
                        Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio
                    </p>
                </div>
            </article><!--.entrada-blog-->
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieon cumple con todas mis expectativas.
                </blockquote>
                <p>- German D Celis</p>
            </div>
        </section>
    </div>

<?php 
    inculirTemplate('footer');  
?>