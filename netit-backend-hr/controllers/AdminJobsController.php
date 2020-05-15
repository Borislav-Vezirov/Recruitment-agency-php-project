<?php


namespace controllers;


class AdminJobsController {

    public function index() {

        if(!\user\User::isLoged() || \user\User::isRegular()) {
            header('Location: index.php');
        }

        if(isset($_POST['post_tokken']) && $_POST['post_tokken'] == 1) {
            return $this->createJobsPost();
        }
    }

    public function createJobsPost() {
        $jobsPostTitle        = $_POST['title'];
        $jobsPostCategory     = $_POST['category'];
        $jobsPostDescription  = $_POST['description'];
        $jobsPostRequirements = $_POST['requirements'];

        $jobsPostCompany      = \user\User::companyName();

        $postId = \manage_job_post\ManageJobPost::create($jobsPostTitle, $jobsPostCategory, $jobsPostDescription, $jobsPostRequirements, $jobsPostCompany);
        if($postId) {
            \session\Session::setFlashMessage('create_job_post', 'Обявата е публикувана успешно');
        }
    }
}