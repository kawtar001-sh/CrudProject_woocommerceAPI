<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>list of clients</title>
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
    $list = file_get_contents("http://localhost:8080/woocommerce_project/listClients.php");
    $list = json_decode($list, true);

    ?>
    <div class="container col-md-8 col-offset-4">
        <h1 style="padding:20px; color:tomato;margin-left: -20px; text-align: center"><b><i> Tous Les Clients</i></b> </h1>
        <a href="addClient.php" class="btn btn-danger float-right" style="margin-bottom: 15px ;color:black" role="button" style="margin-bottom: 15px"> Ajouter Client </a>
        <table class="table table-bordered">
            <thead style="text-align: center; color: tomato">
                <tr>
                    <td>Nom </td>
                    <td>Prenom</td>
                    <td>Email</td>
                    <td>Ville</td>
                    <td>Tel</td>
                    <td>Action</td>
                </tr>
                <?php
                foreach ($list as $client) {
                    echo "
                                        <td>" . $client["last_name"] . "</td>
                                        
                                        <td>" . $client["first_name"] . "</td>
                                        <td>" . $client["email"] . "</td>
                                        <td>" . $client["billing"]['city'] . "</td>
                                        <td>" . $client["billing"]['phone'] . "</td>
                                        <td><button><a class='btn btn-primary' href='EditClients.php?id=" . $client['id'] . "'>Modifier</a></button></td>
                                        <td><button onclick=\"myFunction()\"><a class='btn btn-danger' href='deleteClient.php?id=" . $client['id'] . "' onclick='myFunction()'>Supprimer</a></button></td></tr>";
                }
                ?>
        </table>
        <script>
            function myFunction() {
                alert("DO YOU WANT EALLY DELETE THIS CLIENT !!");
            }
        </script>
    </div>

</body>

</html>