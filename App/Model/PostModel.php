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

}