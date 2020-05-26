<?php


namespace routes;


class JobPostApi {

    public function index() {

        $collection = \manage_job_post\ManageJobPost::fetch();

//               foreach ($collection as $value) {
//
//            echo "<div class='row'>";
//            echo "<div class='col-sm-4 jp'> <b>{$value['title']}</b></div>";
//            echo "<div class='col-sm-2 jp'> <i>{$value['category']}</i></div>";
//            echo "<div class='col-sm-3 jp'> {$value['company']}</div>";
//            echo "<div class='col-sm-3 jp'> <button class='btn btn-success' onclick='window.location.href =`job_post_extended.php`;'>Виж Повече
//                                            </button></div>";
//            echo "</div>";
//        }
        echo json_encode($collection);
    }
}