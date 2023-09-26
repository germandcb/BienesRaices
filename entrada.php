<?php 
    require 'includes/app.php';
    inculirTemplate('header');
    
?>

    <main class="contenedor  seccion contenido-centrado">
        <h1>Guía para la decoracion de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build//img/destacada2.jpg" alt="Imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/05/2023</span> por <span>Admin</span></p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum molestias alias deleniti pariatur quasi ducimus repellendus. Odit fugit eius qui debitis at, voluptates, nam velit, libero modi quaerat eum delectus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam libero magni consequatur incidunt, fuga ipsam similique sint, molestiae, iure laudantium architecto. Facere ullam reprehenderit, iste facilis ut praesentium iure id.</p>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto nostrum dolore dolores, explicabo id, excepturi nisi expedita aut dolorum repudiandae deserunt iure corporis! Et soluta error porro laborum reprehenderit voluptatum?</p>
        </div>
    </main>

<?php 
    inculirTemplate('footer');  
?>