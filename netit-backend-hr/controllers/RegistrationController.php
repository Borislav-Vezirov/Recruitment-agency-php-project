<?php

namespace controllers;

class RegistrationController {

    public function index() {

        if (isset($_POST) && isset($_POST['post_tokken'])) {

            $username   = $_POST['username'];
            $email      = $_POST['email'];
            $password   = $_POST['password'];

            if (\user\User::registration_ind($username, $email, $password)) {
                header('Location: dashboard.php');
            }
        }
    }

    public function indexKorp() {

        if (isset($_POST) && isset($_POST['post_tokken'])) {

            $companyName    = $_POST['username'];
            $email          = $_POST['email'];
            $industry       = $_POST['industry'];
            $description    = $_POST['description'];
            $password       = $_POST['password'];

            if (\user\User::registration_korp($companyName, $email, $industry, $description, $password)) {
                header('Location: admin_jobs.php');
            }
        }
    }
}
