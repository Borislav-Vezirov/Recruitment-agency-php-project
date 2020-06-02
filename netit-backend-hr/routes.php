<?php
include 'autoload.php';

if(isset($_GET) && isset($_GET['endpoint'])) {

    $requestMethod = isset($_GET['method']) ?
        $_GET['method']        :
        'index';

    $endpointMap = array(
        'posts'     => (new \routes\JobPostApi()),
//        'groups'    => (new \routes\GroupApi())
    );

    $endpointMap[$_GET['endpoint']]->{$requestMethod}();
}