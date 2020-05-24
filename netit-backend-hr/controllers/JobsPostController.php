<?php


namespace controllers;


class JobsPostController {

    private $jobPostCollection = array();

    public function index() {

        $this->jobPostCollection = \manage_job_post\ManageJobPost::fetch();

    }

    public function getJobPostCollection() {

        return $this->jobPostCollection;
    }

    public function checkIfIsLogged() {
        if (!\user\User::isLoged()) {
            header('Location: index.php');
        }
    }
}