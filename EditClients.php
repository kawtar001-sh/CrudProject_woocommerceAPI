<?php
require "auth.php";
$id = $_GET['id'];
$client = json_encode($woocommerce->get('customers/' . $id));
$client = json_decode($client, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>midify client</title>
</head>

<body>
    <div class="container col-md-8 col-offset-4">
        <h3>Ajouter un Client </h3>
        <form action="saveClient.php" method="POST">
            <div>
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="Nom" value="<?php echo $client["last_name"]; ?>">
            </div>
            <div>
                <label class="form-label">Prenom</label>
                <input type="text" class="form-control" name="Prenom" value="<?php echo $client["first_name"]; ?>">
            </div>
            <div>
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="Email" value="<?php echo $client["email"]; ?>">
            </div>
            <div>
                <label class="form-label">Ville</label>
                <input type="text" class="form-control" name="Ville" value="<?php echo $client["billing"]['city']; ?>">
            </div>
            <div>
                <label class="form-label">Tel</label>
                <input type="text" class="form-control" name="Tel" value="<?php echo $client["billing"]['phone']; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Modifier">


        </form>
    </div>

</body>

</html>