<?php


namespace App\Model;


class ColorModel
{
    protected $DBConnect;

    public function __construct()
    {
        $connect = new DBConnect();
        $this->DBConnect = $connect->connect();
    }
    public function getAllColor(){
        $sql = "SELECT * FROM Colors";
        $stmt = $this->DBConnect->query($sql);
        $data = $stmt->fetchAll();
        $colors = [];
        foreach ($data as $item) {
            $color = new Colors($item["color"]);
            $color->setId($item["id"]);
            array_push($colors, $color);
        }
        return $colors;
    }


}