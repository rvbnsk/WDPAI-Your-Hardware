<?php

require_once 'DefaultController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class LoginController extends DefaultController {
    public function login() {
        if(!$this->isPost()) {
            return $this->render('login');
        }

        session_start();

        $email = $_POST["email"];
        $password = $_POST["password"];

        $userRepository = new UserRepository();
        $user = $userRepository->getUser($email);

        if(!$user) {
            return $this->render('login', ["messages" => ["User not exist"]]);
        }

        if($user->getEmail() !== $email) {
            return $this->render('login', ["messages" => ["User with this email ".$email." not exist ".$password]]);
        }

        if($user->getPassword() !== $password) {
            return $this->render('login', ["messages" => ["User invalid ".$password." password"]]);
        }

        $_SESSION["isLoggedIn"] = true;
        $_SESSION["email"] = $email;

        header("Location: http://localhost:8080/home");

    }

    public function register() {
        if(!$this->isPost()) {
            return $this->render('register');
        }

        $userRepository = new UserRepository();

        $email = $_POST["email"];
        $password = $_POST["password"];
        $name = $_POST["name"];
        $surname = $_POST["surname"];

        $userRepository->addUser(new User($email, $password, $name, $surname, []));

        header("Location: http://localhost:8080/login");
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();

        header("Location: http://localhost:8080/login");
    }
}