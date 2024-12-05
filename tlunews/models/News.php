<?php
    require_once __DIR__ .'/../config/Database.php';
    class News{
        private $id;
        private $title;
        private $content;
        private $image;
        private $created_at;
        private $category_id;

        public function __construct(){}

        public function getId(){
            return $this->id;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getContent(){
            return $this->content;
        }

        public function getImage(){
            return $this->image;
        }
        public function getCreatedAt(){
            return $this->created_at;
        }
        public function getCategoryId(){
            return $this->category_id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function setTitle($title){
            $this->title = $title;
        }
        public function setContent($content){
            $this->content = $content;
        }
        public function setImage($image){
            $this->image = $image;
        }
        public function setCreated_at($created_at){
            $this->created_at = $created_at;
        }
        public function setCategoryId($category_id){
            $this->category_id = $category_id;
        }

        public function SelectAllNews(){
            $db = new Database();
            $conn = $db->getConnect();
            $stmt = $conn->prepare('SELECT * FROM news');
            $stmt -> execute();
            $result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);
            $kq = $stmt -> fetchAll();
            return $kq;
        }

        public function AddNews($title,$content,$image){
            $db = new Database();
            $conn = $db->getConnect();
            $stmt = $conn->prepare('INSERT INTO news(title,content,image) VALUES (?,?,?)');
            $stmt -> execute([$title,$content,$image]);
            return $stmt ->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>