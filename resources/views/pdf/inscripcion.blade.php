<!doctype html>
<html lang="en">
    <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <!--CSS-->
            <!--<link rel="stylesheet" href="css.css">-->
             <title>Hello, world!</title>
    </head>
    <body>

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Descripción</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td> $product->id </td>
                    <td> $product->name </td>
                    <td> $product->description </td>
                    <td class="text-right"> $product->stock </td>
                </tr>

            </tbody>
        </table>
    </body>
</html>
