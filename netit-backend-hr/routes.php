<?php

include 'autoload.php';
include 'routes\JobPostApi.php';

(new \routes\JobPostApi())->index();