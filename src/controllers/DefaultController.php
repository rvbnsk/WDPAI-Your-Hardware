<?php

class DefaultController {

    private $request;

    public function __construct() {
        $this->request = $_SERVER['REQUEST_METHOD'];
    }

    protected function isGet() : bool {
    
    }

    protected function isPost(): bool {
        return $this->request === "POST";
    }

    protected function render($template, $variables = []) {
        $templatePath = 'src/html/'.$template.'.php';
        $output = 'File not found';

        if(file_exists($templatePath)) {

            extract($variables);

            ob_start();
            include $templatePath;

            $output = ob_get_clean();
        }

        print $output;
    }

}