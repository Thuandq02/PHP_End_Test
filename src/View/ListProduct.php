<!DOCTYPE html>
<html lang="en">
<head>
    <title>List Product</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_container header-border">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
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
        <div>

            <div>
                <div>

                    <div id="content">
                        <br><br><br>
                        <br><br><br>
                        <h1 style="text-align: center;color: #343a40; margin-bottom: -8px;padding: 24px 12px;">List
                            Product</h1>
                        <br>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Price</th>
                                <th scope="col">Color</th>
                                <th scope="col">Categories</th>
                                <th scope="col">Image</th>
                                <th scope="col">Content</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($colors as $key => $value): ?>
                                <tr>
                                    <td><?php echo ++$key; ?></td>
                                    <td><?php echo $value['name']; ?></td>
                                    <td><?php echo number_format($value['price']) ?> đ</td>
                                    <td><?php echo $value['color']; ?></td>
                                    <td><?php echo $value['category']; ?></td>
                                    <td><img style="width: 100px; height: 100px"
                                             src="img/<?php echo $value['image'] ?>"></td>
                                    <td>
                                        <?php echo substr($value['content'], 0, 45) . '...'; ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-success"
                                           href="index.php?page=edit_product&id=<?php echo $value['id']; ?>">Edit</a>
                                        <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')"
                                           href="index.php?page=delete_product&id=<?php echo $value['id']; ?>">Delete</a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                            </tbody>
                        </table>
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