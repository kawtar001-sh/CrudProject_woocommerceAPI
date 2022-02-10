<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>add client</title>
</head>


<body>
    <div class="container col-md-8 col-offset-4">
        <h3>Ajouter un Client </h3>
        <form action="add.php" method="POST">
            <div>
                <label class="form-label">Nom</label>
                <input type="text" name="Nom" class="form-control">
            </div>
            <div>
                <label class="form-label">Prenom</label>
                <input type="text" name="Prenom" class="form-control">
            </div>
            <div>
                <label class="form-label">Email</label>
                <input type="text" name="Email" class="form-control">
            </div>
            <div>
                <label class="form-label">Ville</label>
                <input type="text" name="Ville" class="form-control">
            </div>
            <div>
                <label class="form-label">Tel</label>
                <input type="text" name="Tel" class="form-control">
            </div>

            <input type="submit" value="Ajouter" class="btn btn-info">

        </form>
    </div>

</body>

</html>