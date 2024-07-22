<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ciudadanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container ">
    <h1>Ciudadanos</h1>
        <table class="table table-border table-striped">
                <thead class="text-center">
                    <tr>
                        <th>DPI</th>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Telefono de Casa</th>
                        <th>Telefono Movil</th>
                        <th>Email</th>
                        <th>Fecha de nacimiento/th>
                        <th>Codigo de nivel Academico</th>
                        <th>Codigo Municipio</th>
                        <th>Contraseña</th>
                    </tr>
                </thead>
            <tbody>
                <?php foreach($datos as $municipios): ?>
                    <tr>
                        <td><?php echo $municipios[ 'dpi'];?></td>
                        <td><?php echo $municipios[ 'apellido'];?></td>
                        <td><?php echo $municipios[ 'nombre'];?></td>
                        <td><?php echo $municipios[ 'direccion'];?></td>
                        <td><?php echo $municipios[ 'tel_casa'];?></td>
                        <td><?php echo $municipios[ 'tel_movil'];?></td> 
                        <td><?php echo $municipios[ 'email'];?></td>
                        <td><?php echo $municipios[ 'fecha_nac'];?></td> 
                        <td><?php echo $municipios[ 'cod_nivel_acad'];?></td>
                        <td><?php echo $municipios[ 'cod_muni'];?></td>
                        <td><?php echo $municipios[ 'contra'];?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>