<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Product</title>
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
                            <div class="header_logo"><a href="index.php?page=home"><img src="./assets/images/logo.png"
                                                                                        alt="SmartOSC"
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
                                    <td colspan="2" align="center"><h1 style="margin-top: 8px;">Create Product</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Product Name</td>
                                    <td><input type="text" class="form-control" name="name" placeholder="Name"
                                               required></td>
                                </tr>
                                <tr>
                                    <td>Product Price</td>
                                    <td><input type="number" class="form-control" name="price" placeholder="Price"
                                               required></td>
                                </tr>
                                <tr>
                                    <td>Color</td>
                                    <td>
                                        <?php foreach ($colors as $key => $value): ?>
                                            <div class="list-group-item">
                                                <input type="checkbox" value="<?php echo $value->getId(); ?>" name="color_id"> <?php echo $value->getColor(); ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Categories</td>
                                    <td>
                                        <select name="category_id" size="9" style="width: 342px; padding: 6px 12px"
                                                required multiple>
                                            <?php foreach ($categories as $key => $value): ?>
                                            <option value="<?php echo $value->getId(); ?>"> <?php echo $value->getCategory(); ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td>
                                        <input type="file" name="image">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Content</td>
                                    <td>
                                        <textarea name="content" id="" cols="27" rows="5"
                                                  style="width: 342px;padding: 6px 12px;"
                                                  placeholder="Mô tả"></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a class="btn btn-warning" href="index.php?page=list_product">End</a>
                                    </td>
                                    <td>
                                        <button style="width: 200px" class="btn btn-primary" type="submit">Save</button>
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
                        <div class="footer_logo"><a href="index.php?page=home"><img src="./assets/images/logo.png"
                                                                                    alt="SmartOSC" class="logo"></a>
                        </div>
                        <div class="copyright ml-auto mr-auto">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved
                        </div>
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