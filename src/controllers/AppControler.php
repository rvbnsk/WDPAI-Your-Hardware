<?php

require_once 'DefaultController.php';

class AppController extends DefaultController {
    
    public function index() {
        $this->render('login', []);
    }

    public function home() {
        $this->render('home', []);
    }

    public function projects() {
        $this->render('projects', []);
    }

    public function login() {
        $this->render('login', []);
    }
}