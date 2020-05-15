<?php

namespace config;

class Config {

    public static function db($dbHandler) {

        return array(
            'db_host' => 'localhost',
            'db_user' => 'root',
            'db_name' => 'final_project',
            'db_pass' => ''
        );
    }
}