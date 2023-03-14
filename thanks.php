<?php

$errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['name']) || trim($_POST['name'] === "")) {
                $errors[] = "Name is required!";
            }
            if (!isset($_POST['prenom']) || trim($_POST['prenom'] === "")) {
                $errors[] = "Prenom is required!";
            }
            if (!isset($_POST['email']) || trim($_POST['email'] === "")) {
                $errors[] = "Email is required!";
            }
            
            if (!isset($_POST['phone']) || trim($_POST['phone'] === "")) {
                $errors[] = "Phone is required!";
            }
            if (!isset($_POST['textarea']) || trim($_POST['textarea'] === "")) {
                $errors[] = "Textarea is required!";
            }

            if (empty($errors)) {
                echo $_POST["prenom"] . " " . $_POST["name"] . " de nous avoir contacté à propos de " . $_POST["subject"] . ". Un de nos conseillers vous contactera soit à l’adresse " . $_POST["email"] . " ou par téléphone au " . $_POST["phone"] . " dans les plus brefs délais pour traiter votre demande : " . $_POST["textarea"];
            } else {
                echo "<h2>Errors:</h2>";
                echo "<ul>";
                foreach ($errors as $error) {
                    echo "<li>$error</li>";
                }
                echo "</ul>";
                echo count($errors);
                die();
            }
        }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The box model</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main>

    </main>
    <footer>&copy; Wilder</footer>
</body>

</html>