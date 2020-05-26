<?php

include 'autoload.php';

(new \controllers\RegistrationController())->indexKorp();
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
<h1>Агенция за подбор на персонал</h1>
<h4>Регистрация</h4>
<div class="container">
    <div class="korp">
        <h5>Корпоративни клиенти</h5>
        <form action="" method="POST" class="form-group" action="admin_jobs.php">
            <input type="text" class="form-control" name="username" placeholder="Въведете името на фирмата">
            <input type="email" class="form-control"name="email" placeholder="Въведете валиден имейл">
            <input type="text" class="form-control" name="industry" placeholder="Въведете бранша на работа"><br>
            <textarea class="form-control" name="description" placeholder="Описание на дейността"></textarea>
            <input type="password" class="form-control" name="password" placeholder="Въведете парола">
            <input type="password" class="form-control" name="repeat-password" placeholder="Повторете паролата">
            <input type="hidden" name="post_tokken" value="1">
            <input type="submit" class="btn btn-primary btn-sec" name="post_submit">
        </form>
    </div>
    <script src="scripts/jquery.js"></script>
    <script src="scripts/query.js"></script>
    <script src="scripts/index.js"></script></body>

</html>

