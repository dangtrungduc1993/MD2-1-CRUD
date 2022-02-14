<?php
namespace App\Model;
class PostModel
{
    public $connect;
    public function __construct()
    {
        $db = new DBConnect();
        $this->connect = $db->connect();
    }

    public function getAll()
    {
        $sql = "select * from posts";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);

    }
    public function getById($id){
        $sql = "select * from posts where id = $id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
    public function create($post){
        $sql="Insert into posts(title, content) values (?,?)";
        $stmt= $this->connect->prepare($sql);
        $stmt->bindParam(1,$post['title']);
        $stmt->bindParam(2,$post['content']);
        $stmt->execute();

    }
    public function delete($id){

    }

}