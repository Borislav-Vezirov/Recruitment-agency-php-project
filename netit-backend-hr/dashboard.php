<?php
include 'autoload.php';
$jobsPostReference = new \controllers\JobsPostController();
$jobsPostReference->index();
$jobsPostReference->checkIfIsLogged();
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
    <h1>Обяви за работа</h1>
    <div class="container container-jp">

    <?php
        foreach ($jobsPostReference->getJobPostCollection() as $value) {

            echo "<div class='row'>";
            echo "<div class='col-sm-4 jp'> <b>{$value['title']}</b></div>";
            echo "<div class='col-sm-2 jp'> <i>{$value['category']}</i></div>";
            echo "<div class='col-sm-3 jp'> {$value['company']}</div>";
            echo "<div class='col-sm-3 jp'> <button class='btn btn-success' onclick='window.location.href =`job_post_extended.php`;'>Виж Повече
                                            </button></div>";
            echo "</div>";
        }
    ?>

    </div>
</main>

<script src="scripts/jquery"></script>
</body>

</html>