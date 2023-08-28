<?php 
    require 'includes/funciones.php';
    inculirTemplate('header');
    
?>

    <main class="contenedor  seccion">
        <h1>Conoce sobre nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="imagen/webp">
                    <source srcset="build/img/nosotros.jpg" type="imagen/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam temporibus mollitia voluptatem optio deleniti culpa facilis odio modi quaerat, tenetur officiis. Dignissimos voluptas maiores aperiam. Cupiditate culpa harum veniam iusto!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus repellat natus dolores culpa ipsum, veniam non! Laboriosam magnam necessitatibus ipsa modi, iste optio adipisci sed, minus error exercitationem cupiditate doloribus?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quasi praesentium ea voluptatem ipsa quas dolores ratione, harum ipsum ad id mollitia quibusdam, perferendis consequuntur similique, suscipit eum! Alias, provident.
                </p>
            </div>
        </div>        
    </main>

    <section class="contenedor  seccion">
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
    </section>

<?php 
    inculirTemplate('footer');  
?>