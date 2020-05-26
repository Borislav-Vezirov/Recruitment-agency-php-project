
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
        <div class="header">
<!--            <ul class="list-1">-->
<!--                <li><a href="login.php">Вход</a></li>-->
<!--            </ul>-->
<!--            <ul class="list-2">-->
<!--                <li> Регистрация - <span onclick="window.location.href = 'registration_korp.php';">Фирми</span>-->
<!--                                   / <span onclick="window.location.href = 'registration_ind.php';">Потребители</span></li>-->
<!--            </ul>-->
        </div>
    </header>
    <h1>Агенция за подбор на персонал</h1><br><br>
    <div class="container-index">
        <div class="registration">
            <h5>Обяви за работа</h5>
            <hr>
            <button class="btn btn-primary" onclick="window.location.href = 'login.php';">Вход</button>
            <button class="btn btn-primary" onclick="window.location.href = 'registration_ind.php';">Регистрирай се</button>

        </div>
        <div class="registration">
            <h5>Публикувай обява</h5>
            <hr>
            <button class="btn btn-primary" onclick="window.location.href = 'login.php';">Вход</button>
            <button class="btn btn-primary" onclick="window.location.href = 'registration_korp.php';">Регистрирай се</button>
        </div>
    </div>
    <script src="scripts/jquery.js"></script>
    <script src="scripts/query.js"></script>
    <script src="scripts/index.js"></script>

</body>

</html>
