<?php
    include_once (__DIR__ ."/../models/User.php");
    session_start();
    ob_start();
    class LoginController{
        public function login(){
            $message = '';
            if(isset($_POST['login'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $user = new User();
                $userData = $user -> checkUser($username,$password);
                if($userData){
                    if($userData['role']==1){
                        {
                            // $message =  "Đăng nhập thành công tài khoản Admin";
                            header('location:dashboard.php');
                            exit;
                        }
                    }
                    else if($userData['role']==0){
                        // $message =  "Đăng nhập thành công tài khoản Admin";
                        header('location:index.php');
                        exit;
                    }
                else{
                    $message = "Tên đăng nhập hoặc mật khẩu không đúng";
                }
                }
                include_once __DIR__ .('/../views/admin/login.php');
            }
        }

        public function logout() {
            // Bắt đầu session nếu chưa bắt đầu
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
        
            // Xóa tất cả session
            session_unset();  // Xóa các biến session
            session_destroy(); // Hủy session
        
            // Xóa cookie liên quan (nếu có)
            if (isset($_COOKIE['PHPSESSID'])) {
                setcookie('PHPSESSID', '', time() - 3600, '/');
            }
            header('location:login.php');
            exit;
        }
    }
?>