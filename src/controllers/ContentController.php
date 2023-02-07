<?php

require_once 'DefaultController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../models/Data.php';
require_once __DIR__.'/../repository/DataRepository.php';

class ContentController extends DefaultController {

    const MAX_FILES_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/uploads/';

    private $messages = [];

    public function getPosts() {
        $repository = new DataRepository();
        echo $repository->getData();
    }

    public function admin() {
        if(!$this->isPost()) {
            return $this->render('admin');
        }
    }

    public function posts() {
        $this->render('posts');
    }

    public function contact() {
        $this->render('contact');
    }

    public function about() {
        $this->render('about');
    }

    public function postDetails() {
        $this->render('postDetails');
    }

    public function addPost() {
        session_start();
        if(!$this->isPost() && is_uploaded_file($_FIELS['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            return $this->render('addPost', ['messages' => $this->messages]);
        }

        $repository = new DataRepository();

        move_uploaded_file(
            $_FILES['file']['tmp_name'],
            dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']["name"]
        );

        $post = new Data(
            $_POST['text'],
            $_POST['description'],
            $_SESSION['email'],
            "src/uploads/".$_FILES['file']["name"]
        );

        $repository->addPost($post);
        $this->render('addPost');
    }

    private function validate(array $file) : bool {
        if($file['size'] > self::MAX_FILE_SIZE) {
            $this->messages[] = 'File too large';
            return false;
        }

        if(!isset($file['type']) && !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->messages[] = 'File type not supported';
            return false;
        }

        return true;
    }

    public function post() {
        $id = $_SERVER["QUERY_STRING"];

        $id = explode("=", $id)[1];
        
        $repository = new DataRepository();
        echo json_encode($repository->getDataById($id));
    }
}