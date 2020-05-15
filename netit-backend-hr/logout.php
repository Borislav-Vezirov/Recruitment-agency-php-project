<?php

include 'autoload.php';

\user\User::logout();
header('Location: index.php');
