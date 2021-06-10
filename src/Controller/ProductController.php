<?php

namespace App\Controller;


use App\Model\CategoryModel;
use App\Model\ColorModel;
use App\Model\Products;
use App\Model\ProductModel;

class ProductController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->colorModel = new ColorModel();
        $this->categoryModel = new CategoryModel();
    }

    public function showListProduct()
    {
        $products = $this->productModel->getAll();
        $numberPages = $this->productModel->pageProduct();
        $colors = $this->productModel->getInnerJoin();
        include_once "src/View/ListProduct.php";
    }

    public function showProduct()
    {
        $products = $this->productModel->getAll();
        $numberPages = $this->productModel->pageProduct();
        $colors = $this->colorModel->getAllColor();
        $categories = $this->categoryModel->getAllCategory();
        include_once "src/View/Home.php";
    }

    public function addProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $colors = $this->colorModel->getAllColor();
            $categories = $this->categoryModel->getAllCategory();
            include_once "src/View/AddProduct.php";
        } else {
            $name = $_REQUEST["name"];
            $price = $_REQUEST["price"];
            $color_id = $_REQUEST["color_id"];
            $category_id = $_REQUEST["category_id"];
            $image = $_FILES["image"]["name"];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, 'img/'.$image);
            $content = $_REQUEST["content"];
            $products = new Products($name, $price, $color_id, $category_id, $image, $content);
            $this->productModel->addProduct($products);
            header("location:index.php?page=list_product");
        }
    }

    public function editProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_REQUEST['id'];
            $products = $this->productModel->getByProduct($id);
            include_once "src/View/EditProduct.php";
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST["name"];
            $price = $_REQUEST["price"];
            $color = $_REQUEST["color"];
            $categories = $_REQUEST["categories"];
            $image = $_FILES["image"]["name"];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, 'img/'.$image);
            $content = $_REQUEST["content"];
            $newProduct = new Products($name, $price, $color, $categories, $image, $content);
            $newProduct->setId($id);
            $this->productModel->editProduct($newProduct);
            header("location:index.php?page=list_product");
        }
    }

    public function deleteProduct()
    {
        $id = $_REQUEST["id"];
        $this->productModel->deleteProduct($id);
        header("location:index.php?page=list_product");
    }



}