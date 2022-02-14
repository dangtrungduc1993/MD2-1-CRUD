<?php
//require "vendor/autoload.php";
require __DIR__ . "/vendor/autoload.php";

use App\Model\PostModel;
use App\Controller\PostController;

$postController = new PostController();

$page = $_GET['page'] ?? '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php">Home</a>
<a href="index.php?page=post-list">Post</a>
<?php
switch ($page) {
    case "post-list":
        $postController->getAllPost();
        break;
    case "post-detail":
        $id=$_GET["id"];
        $postController->getPostById($id);
        break;
    case "post-create":
        $postController->createPost();
        break;
    default:
}


?>
</body>
</html>