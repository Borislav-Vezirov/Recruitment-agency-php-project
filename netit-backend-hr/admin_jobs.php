 <?php
include 'autoload.php';

( new controllers\AdminJobsController())->index();
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
                 <li class="nav-item ml-auto rightNavItem"><a class="logout" href="logout.php"><i class="fas fa-sign-out-alt"></i> Излез</a></li>
            </ul>
        <div style="height: 2px; background: #27aae1;"></div>
    </header>
        <?php
        if(\session\Session::checkFlashMessage('create_job_post')) {

            echo '<div class="success">';
            echo \session\Session::getFlashMessage('create_job_post');
            echo '</div>';
        }
        ?>
    <h1 class="index">Публикуване на обява</h1>
    <div class="container">
        <form class="form-group" method="post">
            <div class="row">
                <div class="col-sm-12">
                    <p><b>Длъжност:</b></p>
                    <input type="text" class="form-control" name="title">
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm">
                    <p><b>Категория:</b></p>
                </div>
                <div class="col-sm-11">
                    <select class="custom-select" id="inputGroupSelect01"name="category">
                        <option selected value="Авиация">Авиация</option>
                        <option value="Автомобили,автосервизи">Автомобили,автосервизи</option>
                        <option value="Администрация">Администрация</option>
                        <option value="Архитектура">Архитектура</option>
                        <option value="Банки,кредитиране">Банки,кредитиране</option>
                        <option value="Дизайн">Дизайн</option>
                        <option value="Енергетика">Енергетика</option>
                        <option value="Застраховане">Застраховане</option>
                        <option value="Здравеопазване">Здравеопазване</option>
                        <option value="Изкуство">Изкуство</option>
                        <option value="ИТ">ИТ</option>
                        <option value="Медии">Медии</option>
                        <option value="Недвижими имоти">Недвижими имоти</option>
                        <option value="Образование">Образование</option>
                        <option value="Ресторанти">Ресторанти</option>
                        <option value="Селско стопанство">Селско стопанство</option>
                        <option value="Търговия">Търговия</option>
                        <option value="Транспорт">Транспорт</option>
                        <option value="Хотели">Хотели</option>
                        <option value="Шофьори">Шофьори</option>
                        <option value="Друго">Друго</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm textarea">
                    <p><b>Описание:</b></p>
                </div>
                <div class="col-sm-12">
                    <textarea name="description" cols="130" rows="5"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm textarea">
                    <p><b>Изисквания:</b></p>
                </div>
                <div class="col-sm-12">
                    <textarea name="requirements" cols="130" rows="5"></textarea>
                </div>
                <input type="hidden" name="post_tokken" value="1">
            </div>
            <div class="row">
                <input type="submit" class="btn btn-primary btn-aj" value="Публикувай">
                <input type="reset" class="btn btn-light btn-aj" value="Откажи">
            </div>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/94e12cd6b3.js" crossorigin="anonymous">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/ajax_query.js"></script>
    <script src="scripts/index.js"></script></body>
</html>