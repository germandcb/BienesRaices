<?php 
    require '../../includes/app.php';
    use App\Propiedad;
    use App\Vendedor;
    use Intervention\Image\ImageManagerStatic as Image;


    estaAutenticado();

    // Validar la URL por ID Válid
    $id = $_GET['id'];
    $id = filter_var( $id, FILTER_VALIDATE_INT);

    if (!$id) {
        header('Location: /admin');
    }

    // Consulta Obtener los datos de la propiedad
    $propiedad = Propiedad::find($id);

    // Consultar para obtener los vendedores
    $vendedores = Vendedor::all();

    // Arreglo con mensajes de errores
    $errores = Propiedad::getErrores();
    
    // Ejecutar el codigo despues de que el usuairo envia el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Asignar los atributos
        $args = $_POST['propiedad'];
        
        // Sincronizar datos de la propiedad
        $propiedad->sincronizar($args);

        // Validacion subida de archivos
        $errores = $propiedad->validar();

        // Generar un nombre unico 
        $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

        if($_FILES['propiedad']['tmp_name']['imagen']) {
            $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);
            $propiedad->setImagen($nombreImagen);
        }
        
        if(empty($errores)) {
            // Almacenar la imagen
            if($_FILES['propiedad']['tmp_name']['imagen']) {
                $image->save(CARPETA_IMAGENES . $nombreImagen);
            }

            $propiedad->guardar();
        }

        
    }

    
    inculirTemplate('header');
    
?>
    <main class="contenedor  seccion">
        <h1>Actualizar Propiedad</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div> 
        <?php endforeach; ?>
        <form class="formulario" method="POST" enctype="multipart/form-data" >
        <?php include '../../includes/templates/formulario_propiedades.php'; ?>
            <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php 
    inculirTemplate('footer');  
?>