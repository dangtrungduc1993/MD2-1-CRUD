<?php
//require "vendor/autoload.php";
require __DIR__."/vendor/autoload.php";
use App\Model\PostModel;
use App\Controller\PostController;


//$postModel = new PostModel();
//var_dump($postModel->getAll());
$postController = new PostController();$postController->getAllPost();


?>
