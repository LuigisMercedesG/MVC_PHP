<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="View/Estilo.css">
    <title>Document</title>
</head>

<body>
    <div class="Contenedor">
        <h1>Información del Estudiante</h1>

        <h2>Actualizar Estudiante</h2>

        <form class="Formulario" method="POST" action="index.php">

            <table class="Tabla" align="center">
                <tr hidden>
                    <td class="titulos_actualizar"><label for="id">ID:</label></td>
                    <td class="campo_texto"><input type="text" name="id_Actualizar" id="id" value="<?php echo "$Estudiante[0]" ?>"></td>
                </tr>
                <tr>
                    <td class="titulos_actualizar"><label for="nam">Nombre:</label></td>
                    <td class="campo_texto"><input type="text" name="nombre" id="nombre" value="<?php echo "$Estudiante[1]" ?>"></td>
                </tr>
                <tr>
                    <td class="titulos_actualizar"><label for="ape">Apellido:</label></td>
                    <td class="campo_texto"><input type="text" name="apellido" id="apellido" value="<?php echo "$Estudiante[2]" ?>"></td>
                </tr>
                <tr>
                    <td class="titulos_actualizar"><label for="ed">Edad:</label></td>
                    <td class="campo_texto"><input type="text" size="3" name="edad" id="edad" value="<?php echo "$Estudiante[3]" ?>"></td>
                </tr>
                <tr>
                    <td class="titulos_actualizar"><label for="ed">Numero:</label></td>
                    <td class="campo_texto"><input type="text" name="numero" id="numero" value="<?php echo "$Estudiante[4]" ?>"></td>
                </tr>
                <tr>
                    <td class="titulos_actualizar"><label for="ed">Matricula:</label></td>
                    <td class="campo_texto"><input type="text" name="matricula" id="matricula" value="<?php echo "$Estudiante[5]" ?>"></td>
                </tr>
                <tr>
                    <td class="Botones" colspan="2" align="center">
                        <input name="Actualizar" class="boton" type="submit" value="Actualizar">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>