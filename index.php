<?php

require_once 'src/Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index', 'AppController');
Routing::get('home', 'AppController');

Routing::post('register', 'LoginController');
Routing::post('login', 'LoginController');

Routing::get('admin', 'ContentController');
Routing::post('addPost', 'ContentController');
Routing::get('getPosts', 'ContentController');
Routing::get('posts', 'ContentController');
Routing::get('about', 'ContentController');
Routing::get('logout', 'LoginController');

Routing::get('post', 'ContentController');
Routing::get('postDetails', 'ContentController');
Routing::get('contact', 'ContentController');

if($path == "/") {
    $path = "index";
}

Routing::run($path);