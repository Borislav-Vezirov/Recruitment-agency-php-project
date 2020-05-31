
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
    <ul class="nav justify-content-start bg-secondary">
        <li class="nav-item leftNavItems">
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
        <li class="nav-item"><a class="btn-aj" href="dashboard.php">Обяви</a></li>
        <?php

        if(\user\User::isLoged() && \user\User::isCompany()) {
            echo '<li class="nav-item"><a class="newJobPost" href="admin_jobs.php">Публикувайте нова обява</a></li>';
        }
        ?>
        <li class="nav-item ml-auto rightNavItem"><a class="logout" href="logout.php"><i class="fas fa-sign-out-alt"></i> Излез</a></li>
    </ul>
    <div style="height: 2px; background: #27aae1;"></div>
</header>
<main>
        <div class="container">
            <div class="row">
                <div class='col-sm-12 applay'> <button class='btn btn-success'>Кандидатствай</button></div>
            </div>
        </div>

</main>
<script src="scripts/jquery.js"></script>
<script src="scripts/ajax_query.js"></script>
<script src="scripts/index.js"></script></body>

</html>