<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>list of products</title>
</head>

<br>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: black">
            <div>
                <a href="" class="navbar-brand"> Woocommerce </a>
            </div>

        </nav>
    </header>
    <?php
    $list = file_get_contents("http://localhost:8080/woocommerce_project/listProducts.php");
    $list = json_decode($list, true);

    ?>
    <div class="container col-md-8 col-offset-4">
        <h1 style="padding:20px; color:tomato;margin-left: -20px; text-align: center"><b><i> Tous Les Produits</i></b> </h1>
        <a href="addProduct.php" class="btn btn-danger float-right" style="margin-bottom: 15px ;color:black" role="button" style="margin-bottom: 15px"> Ajouter Produit </a>

        <table class="table table-bordered">
            <thead style="text-align: center; color: tomato">
                <tr>
                    <td>Nom </td>
                    <td>Prix</td>
                    <td>Achat total</td>
                    <td>Description</td>
                    <td>Image</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list as $product) {
                    echo "
                                        <td>" . $product["name"] . "</td>
                                        
                                        <td>" . $product["regular_price"] . "</td>
                                        <td>" . $product["total_sales"] . "</td>
                                        <td>" . $product["description"] . "</td>
                                        <td><img height='50px' width='50px' src='" . $product["images"][0]["src"] . "'></td>
                                        <td><button><a class='btn btn-primary' href='Edit.php?id=" . $product['id'] . "'>Modifier</a></button>
                                        <button onclick=\"myFunction()\"><a class='btn btn-danger' href='delete.php?id=" . $product['id'] . "' onclick='myFunction()'>Supprimer</a></button></td></tr>";
                }
                ?>
            </tbody>
        </table>
        <script>
            function myFunction() {
                alert("DO YOU WANT EALLY DELETE THIS PRODUCT !!");
            }
        </script>

    </div>


</body>

</html>