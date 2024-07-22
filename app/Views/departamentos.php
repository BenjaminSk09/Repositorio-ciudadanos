<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Departamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Departamentos</h1>
            <table class="table table-border table-striped table-dark">
                <thead>
                    <tr>
                        <th>Codigo de Departamento</th>
                        <th>Nombre de Departamento</th>
                        <th>Codigo de Region</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($datos as $departamentos): ?>
                        <tr>
                            <td><?php echo $departamentos[ 'cod_depto'];?></td>
                            <td><?php echo $departamentos[ 'nombre_depto'];?></td>
                            <td><?php echo $departamentos[ 'cod_region'];?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>