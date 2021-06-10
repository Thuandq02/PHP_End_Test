<?php


namespace App\Model;


class ProductModel
{
    protected $DBConnect;

    public function __construct()
    {
        $connect = new DBConnect();
        $this->DBConnect = $connect->connect();
    }

    public function getInnerJoin()
    {
        $sql = "SELECT * FROM Products INNER JOIN Colors ON Products.color_id = Colors.id INNER JOIN Categories ON Products.category_id = Categories.id";
        $stmt = $this->DBConnect->query($sql);
        return  $stmt->fetchAll();
    }



    public function getAll()
    {
        $paging = 8;
          if (isset($_GET["pages"])){
              $pages = $_GET["pages"];
              settype($pages, "int");
          }else{
              $pages = 1;
          }
        $form = ($pages - 1) * $paging;
        $sql = "SELECT * FROM `Products` LIMIT $form,$paging";
        $stmt = $this->DBConnect->query($sql);
        $data = $stmt->fetchAll();
        $products = [];
        foreach ($data as $item) {
            $product = new Products($item["name"], $item["price"], $item["color_id"], $item["category_id"], $item["image"], $item["content"]);
            $product->setId($item["id"]);
            array_push($products, $product);
        }
        return $products;
    }

    public function pageProduct(){
        $sql = "SELECT * FROM `Products`";
        $stmt = $this->DBConnect->query($sql);
        $data = $stmt->fetchAll();
        $numberPage = ceil(count($data) / 8);
        return $numberPage;
    }

    public function addProduct($product)
    {
        $sql = "INSERT INTO Products (name, price, color_id, category_id, image, content) VALUES (:name ,:price, :color_id, :category_id, :image, :content);";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(":name", $product->getName());
        $stmt->bindParam(":price", $product->getPrice());
        $stmt->bindParam(":color_id", $product->getColorId());
        $stmt->bindParam(":category_id", $product->getCategoryId());
        $stmt->bindParam(":image", $product->getImage());
        $stmt->bindParam(":content", $product->getContent());
        $stmt->execute();
    }

    public function getByProduct($id)
    {
        $sql = "SELECT * FROM `Products` WHERE id =:id";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;

    }

//    public function editProduct($newProduct)
//    {
//        $sql = 'UPDATE `Products` SET `name`=:name,price=:price,color=:color,categories=:categories,image=:image,content=:content where id=:id';
//        $stmt = $this->DBConnect->prepare($sql);
//        $stmt->bindValue(":id", $newProduct->getId());
//        $stmt->bindValue(":name", $newProduct->getName());
//        $stmt->bindValue(":price", $newProduct->getPrice());
//        $stmt->bindValue(":color", $newProduct->getColor());
//        $stmt->bindValue(":categories", $newProduct->getCategories());
//        $stmt->bindParam(":image", $newProduct->getImage());
//        $stmt->bindParam(":content", $newProduct->getContent());
//        $stmt->execute();
//    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM Products WHERE id =:id";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

    }






}