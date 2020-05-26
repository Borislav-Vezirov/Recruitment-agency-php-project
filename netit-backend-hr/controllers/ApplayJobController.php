<?php


namespace controllers;


class ApplayJobController {

    public static function create() {

        \db\Database::getInstance()->query("INSERT INTO final_project.jobs_postuser_jobs(user_id, post_id)"
                                        .  "VALUES('{user_id}', '{post_id}')");

        return \db\Database::getInstance()->lastInsertedId();
    }
}