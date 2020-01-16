<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="View/Estilo.css">

    <!--Confirmacion para la eliminacion del estudiante con javascript---------->
    <script>
        function preguntar(id) {
            if (confirm("¿Seguro que quieres Eliminar?")) {
                window.location.href = 'index.php?id_Eliminar=' + id;
            } else {}
        }
    </script>

    <title>Document</title>

</head>

<body>
    <div class="Contenedor">
        <h1>Modelo Vista Controlador</h1>

        <h2>CRUD </h2>
        <p> Create, Read, Update, and Delete</p>

        <form class="Formulario" method="POST" action="<?php $_SERVER["PHP_SELF"] ?>">

            <table class="Tabla" align="center">
                <tr class="barra_tabla">
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Edad</td>
                    <td>Numero</td>
                    <td>Matricula</td>
                </tr>
                <!-----------------------Contenido del resultado de la BBDD------------------------------->
                <?php
                foreach ($MatrizEstudiantes as $key => $value) {
                    # code...
                    ?>
                    <tr>
                        <td><?php echo $value[0]; ?></td>
                        <td><?php echo $value[1]; ?></td>
                        <td><?php echo $value[2]; ?></td>
                        <td><?php echo $value[3]; ?></td>
                        <td><?php echo $value[4]; ?></td>
                        <td><?php echo $value[5]; ?></td>

                        <!--Botones del CRUD--------------------------------------------------------------->
                        <td class="Botones">
                            <a href="Actualizar.php?id_Selecionar=<?php echo $value[0] ?>">
                                <input name="Actualizar" class="boton" type="button" value="Actualizar">
                            </a>

                            <a href="#" onclick="preguntar('<?php echo $value[0] ?>')">
                                <input name="borrar" class="boton" type="button" value="Borrar">
                            </a>
                        </td>
                        <!--------------------------------------------------------------------------------->
                    
                    <?php
                    }
                    ?>
                    <!--Cierre del php con los resultados de la DDBB--------------------------------------->
                </tr>
                <tr>
                    <td colspan="6">
                        <label for="">Nombre: </label>
                        <input name="nombre" type="text" size="10">
                        <label for="">Apellido: </label>
                        <input name="apellido" type="text" size="10">
                        <label for="">Edad: </label>
                        <input name="edad" type="text" size="3">
                        <label for="">Numero: </label>
                        <input name="numero" type="text" size="10">
                        <label for="">Matricula: </label>
                        <input name="matricula" type="text" size="8">
                    </td>
                    <!--Boton del CRUD--------------------------------------------->
                    <td class="Botones">
                        <input name="insertar" class="boton" type="submit" value="Insertar">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>