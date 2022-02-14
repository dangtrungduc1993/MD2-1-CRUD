<?php
namespace App\Controller;
use App\Model\PostModel;

class PostController
{
    public $postModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
    }

    public function getAllPost()
    {
       $posts = $this->postModel->getAll();
       include "App/View/post/list.php";
    }
}