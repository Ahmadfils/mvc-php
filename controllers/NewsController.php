<?php
// filepath: c:\xampp\htdocs\projet-ahdlc\controllers\NewsController.php

class NewsController {
    private $newsModel;

    public function __construct() {
        $this->newsModel = new News();
    }

    public function index() {
        $newsArticles = $this->newsModel->getAllNews();
        require_once '../views/news/index.php';
    }
}