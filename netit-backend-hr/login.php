<?php

include 'autoload.php';

(new controllers\LoginController())->index();
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
<?php
if(\session\Session::checkFlashMessage('error_message')) {

    echo '<div class="error">';
    echo \session\Session::getFlashMessage('error_message');
    echo '</div>';
}
?>
<h1 class="h1-login">Агенция за подбор на персонал</h1>
        <h4>Вход</h4>
        <div class="container login">
            <form action="" method="POST" class="form-group">
                <input type="email" class="form-control"name="email" placeholder="Въведете вашият имайл">
                <input type="password" class="form-control" name="password" placeholder="Въведете вашата парола">
                <input type="hidden" name="post_tokken" value="1">
                <input type="submit" class="btn btn-primary btn-sec" name="post_submit">
            </form>
        </div>
<script src="scripts/jquery.js"></script>
<script src="scripts/query.js"></script>
<script src="scripts/index.js"></script></body>
</html>