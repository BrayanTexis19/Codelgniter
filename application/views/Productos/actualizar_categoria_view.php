<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar categoria</title>
</head>
<body>
    <form action="insertarCategoria" method="post">
        <label for="">Nombre de la categoria</label>
        <input type="text" name="nombre" id="nombre" placeholder="Escriba aqui" value="<? $categoria->nombre ?>">
        <label for="">Status</label>
        <input type="number" name="status" id="status" min=0 max=1 value="<? $categoria->activo ?>">
        <button type="submit">Aceptar</button>
    </form>
</body>
</html>