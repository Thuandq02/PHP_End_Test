<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Product</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content header-border d-flex flex-row align-items-center justify-content-start">
                            <div class="header_logo"><a href="index.php?page=home"><img src="./assets/images/logo.png" alt="SmartOSC"
                                                                                        class="logo"></a></div>
                            <nav class="main_nav">
                                <ul>
                                    <li>
                                        <a href="index.php?page=home">Home</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=list_product">List Product</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=add_product">Create Product</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!--    content-->
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">

                    <div id="content">
                            <form method="POST" enctype="multipart/form-data" class="content-form">
                                <table align="center" class="table" style="width: auto; border-radius: 15px">
                                    <thead class="thead-dark">
                                    <tr>
                                        <td colspan="2" align="center"><h1 style="margin-top: 8px;">Edit Product</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Product Name</td>
                                        <td><input type="text" class="form-control" name="name" placeholder="Name"
                                                   required value="<?php echo $products['name']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Product Price</td>
                                        <td><input type="number" class="form-control" name="price" placeholder="Price"
                                                   required value="<?php echo $products['price']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" id="red" name="color" value="red">
                                                <label for="red" class="check-name"> Red </label>
                                                <input type="checkbox" id="blue" name="color" value="blue">
                                                <label for="blue" class="check-name"> Blue</label>
                                                <input type="checkbox" id="black" name="color" value="black">
                                                <label for="black" class="check-name"> Black</label>
                                                <input type="checkbox" id="white" name="color" value="white">
                                                <label for="white" class="check-name"> White</label><br>
                                                <input type="checkbox" id="yellow" name="color" value="yellow">
                                                <label for="yellow" class="check-name"> Yellow</label>
                                                <input type="checkbox" id="green" name="color" value="green">
                                                <label for="green" class="check-name"> Green</label>
                                                <input type="checkbox" id="pink" name="color" value="pink">
                                                <label for="pink" class="check-name"> Pink</label>
                                                <input type="checkbox" id="violet" name="color" value="violet">
                                                <label for="violet" class="check-name"> Violet</label><br>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Categories</td>
                                        <td>
                                            <select name="categories" size="9" style="width: 342px; padding: 6px 12px"
                                                    required multiple>
                                                <option value="Level 1">Level 1</option>
                                                <option class="lv2" value="Level 1.1">Level 1.1</option>
                                                <option class="lv2" value="Level 1.2">Level 1.2</option>
                                                <option value="Level 2">Level 2</option>
                                                <option class="lv2" value="Level 2.1">Level 2.1</option>
                                                <option class="lv2" value="Level 2.2">Level 2.2</option>
                                                <option value="Level 3">Level 3</option>
                                                <option class="lv2" value="Level 3.1">Level 3.1</option>
                                                <option class="lv2" value="Level 3.2">Level 3.2</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Image</td>
                                        <td>
                                            <input type="file" name="image" id="formGroupExampleInput">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Content</td>
                                        <td>
                                            <textarea name="content" id="" cols="27" rows="5" style="width: 342px;padding: 6px 12px;"><?php echo $products['content']; ?></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a class="btn btn-warning" href="index.php?page=list_product">End</a>
                                        </td>
                                        <td>
                                            <button style="width: 200px" class="btn btn-primary" type="submit">Save
                                            </button>
                                        </td>
                                    </tr>
                                    </thead>
                                </table>
                            </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <div class="footer_overlay"></div>
    <footer class="footer">
        <div class="footer_background" style="background-image:url(./assets/images/footer.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                        <div class="footer_logo"><a href="index.php?page=home"><img src="./assets/images/logo.png" alt="SmartOSC" class="logo"></a></div>
                        <div class="copyright ml-auto mr-auto"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </div>
                        <div class="footer_social ml-lg-auto">
                            <ul>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


</body>
</html>