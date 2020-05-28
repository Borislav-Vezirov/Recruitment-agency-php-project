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
    <div style="height: 2px; background: #27aae1;"></div>
    <nav class="navbar navbar-expand-lg bg-secondary" style="margin: 0;">
    <div class="container" style="margin: 0;">
        <div class="row">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php

                          if(\user\User::displayName()) {
                              echo '<li>';
                              echo '<span class="displayName">';
                              echo 'Здравейте '  . \user\User::displayName();
                              echo '</span>';
                              echo '</li>';
                          }
                     ?>
                </li>
                    <?php

                        if(\user\User::isLoged() && \user\User::isCompany()) {
                            echo '<li class="nav-item"><a class="newJobPost" href="admin_jobs.php">Публикувайте нова обява</a></li>';
                        }
                    ?>
            </ul>
            <ul class="navbar-nav second">
                <li class="nav-item"><a class="logout" href="logout.php"><i class="fas fa-sign-out-alt"></i> Излез</a></li>
            </ul>
        </div>
    </div>
    </nav>
    <div style="height: 2px; background: #27aae1;"></div>
</header>
<main>
    <h1>Обяви за работа</h1>
    <div id="container" class="container container-jp">
        <!--content elements-->
    </div>
</main>
<script src="https://kit.fontawesome.com/94e12cd6b3.js" crossorigin="anonymous"></script>
<script src="scripts/jquery.js"></script>
<script src="scripts/ajax_query.js"></script>
<script src="scripts/index.js"></script></body>

</html>