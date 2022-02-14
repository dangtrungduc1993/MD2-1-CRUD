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
        return $stmt->fetchAll();

    }

}