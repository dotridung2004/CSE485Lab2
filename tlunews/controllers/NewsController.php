<?php
    require_once __DIR__ ."/../models/News.php";
    session_start();
    ob_start();
    class NewsController{

        public function selectall(){
            
        }
        public function create(){
            if(isset($_POST["btn-add"])){
                $title = $_POST["title"];
                $content = $_POST["content"];
                $images = $_POST["images"];
                $news = new News();
                $addnews = $news -> AddNews($title, $content, $images);
                header("location: ../dashboard.php");
            }
        }
    }
?>