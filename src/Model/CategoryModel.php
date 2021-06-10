<?php


namespace App\Model;


class CategoryModel
{
    protected $DBConnect;

    public function __construct()
    {
        $connect = new DBConnect();
        $this->DBConnect = $connect->connect();
    }

    public function getAllCategory(){
        $sql = "SELECT * FROM Categories";
        $stmt = $this->DBConnect->query($sql);
        $data = $stmt->fetchAll();
        $categories = [];
        foreach ($data as $item) {
            $category = new Categories($item["category"]);
            $category->setId($item["id"]);
            array_push($categories, $category);
        }
        return $categories;
    }

}