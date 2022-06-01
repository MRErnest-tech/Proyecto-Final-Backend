<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>
    <form method="post" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">
        <label>Nombre:</label></br>
        <input id="nombre" name="nombre" type="text"></br>
        <label>Apellido Paterno:</label></br>
        <input id="apellido_p" name="apellido_p" type="text"></br>
        <button type="submit">Guardar </button>
    </form>
</body>
</html>