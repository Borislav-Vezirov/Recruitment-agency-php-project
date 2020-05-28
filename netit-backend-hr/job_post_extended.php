
<?php
include 'autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back End Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
<body>
<header>
    <div class="header-2">
        <ul>
            <?php

            if(\user\User::displayName()) {
                echo '<li>';
                echo '<span class="displayName">';
                echo 'Здравейте '  . \user\User::displayName();
                echo '</span>';
                echo '</li>';
            }

            if(\user\User::isLoged() && \user\User::isCompany()) {
                echo '<li ><a class="newJobPost" href="admin_jobs.php">Публикувайте нова обява</a></li>';
            }
            ?>
            <li><a class="logout" href="logout.php">Излез</a></li>
        </ul>
    </div>
</header>
<main>
    <?php


    ?>
        <div class="container">
            <div class="row">
                <div class='col-sm-12 applay'> <button class='btn btn-success'>Кандидатствай</button>
                </div>
            </div>
        </div>

</main>
<script src="scripts/jquery.js"></script>
<script src="scripts/ajax_query.js"></script>
<script src="scripts/index.js"></script></body>

</html>