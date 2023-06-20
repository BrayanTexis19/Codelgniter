<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cateogorias</title>
</head>
<body>
    <h2>Categorias</h2>

    <table>
        <thead>
            <tr>
              <th>No.</th>
              <th>Categoria</th>
              <th>Status</th>
            </tr>
        </thead>
        <tbody>
           <?php
             if($categorias!=false) {
                $contador = 0;
                 foreach ($categorias->result() as $categoria) {
                    ?>
                    <tr>
                         <td> <?= ++$contador?></td>
                         <td> <?= $categoria->nombre?></td>
                         <td> <?= $categoria->activo?></td>
                    </tr>
                    <?php
                 }
             }
           ?>
        </tbody>
    </table>

</body>
</html>