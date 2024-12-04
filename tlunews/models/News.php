<?php 
    class News{
        private $id;
        private $title;
        private $content;
        private $image;
        private $created_at;
        private $category_id;

        public function __construct($id, $title, $content, $image, $created_at, $category_id){
            $this->id = $id;
            $this->title = $title;
            $this->content = $content;
            $this->image = $image;
            $this->created_at = $created_at;
            $this->category_id = $category_id;
        }

        public function getId(){
            return $this->id;
        }
        public function getTitle(){
            return $this->title;
        }

    }

?>