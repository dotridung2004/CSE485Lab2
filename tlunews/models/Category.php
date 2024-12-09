<?php
    require_once __DIR__ .'/../config/Database.php';
    class Category{
        private $id;
        private $name;

        public function __construct(){}
        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function SelectAllCategory(){
            $db = new Database();
            $conn = $db -> getConnect();
            $stmt = $conn -> prepare("SELECT * FROM categories");
            $stmt -> execute();
            $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }

?>