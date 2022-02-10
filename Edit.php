<?php
require "auth.php";
$id = $_GET['id'];
$product = json_encode($woocommerce->get('products/' . $id));
$product = json_decode($product, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>modify product</title>
</head>

<body>
    <div class="container col-md-8 col-offset-4">
        <h3>Modifier un Produit </h3>
        <form action="saveProduit.php" method="POST">
            <div>
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="Nom" value="<?php echo $product['name']; ?>">
            </div>
            <div>
                <label class="form-label">Prix</label>
                <input type="number" class="form-control" name="regular_price" value="<?php echo $product['regular_price']; ?>">
            </div>
            <div>
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="Description" value="<?php echo $product['description']; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Modifier" class="btn btn-danger">


        </form>
    </div>

</body>

</html>