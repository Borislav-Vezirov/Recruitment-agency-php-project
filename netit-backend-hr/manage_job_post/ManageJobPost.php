<?php


namespace manage_job_post;


class ManageJobPost {
    public $second = null;

    public static function create($title, $category, $description, $requirements, $company) {

        \db\Database::getInstance()->query("INSERT INTO final_project.jobs_post(title, category, description, requirements, company)"
                                          .  "VALUES('{$title}', '{$category}', '{$description}', '{$requirements}', '{$company}')");

        return \db\Database::getInstance()->lastInsertedId();
    }

    public static function fetch($id = null) {

        if(is_null($id)) {
            \db\Database::getInstance()->query("SELECT * FROM final_project.jobs_post");
            return \db\Database::getInstance()->fetchCollection();
        }
            \db\Database::getInstance()->query("SELECT * FROM final_project.jobs_post WHERE id = '{$id}'");
            return \db\Database::getInstance()->fetchCollection();
    }

}