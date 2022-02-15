<?php
namespace App\Model;
class PostModel extends BaseModel
{
    public $table = "posts";
    public function create($post){
        $sql="Insert into posts(title, content) values (?,?)";
        $stmt= $this->connect->prepare($sql);
        $stmt->bindParam(1,$post['title']);
        $stmt->bindParam(2,$post['content']);
        $stmt->execute();

    }
}