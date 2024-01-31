<?php require_once "./app/bootstrap.php"; ?>
<?php middleware::logout("auth_id", "login.php"); ?>
<?php utils::module("account"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <?php utils::component("head"); ?>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php utils::component("sidebar"); ?>
        <!-- Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Navbar -->
                <?php utils::component("navbar"); ?>
                <!-- Navbar -->
                <div class="container-fluid">
                    <div class="container mt-5">
                        <h2 class="text-center mb-4">Product Data Entry</h2>
                        <p class="text-primary">You Can add 20 Products Per day. Above 20 products submission will not consider valid. Select product No and provide proper info about the product</p>
                        <form method="post">
                            <div class="form-group">
                                <label for="productTitle">Product Title:</label>
                                <input type="text" class="form-control" id="productTitle" placeholder="Enter product title" required>
                            </div>
                            <div class="form-group">
                                <label for="productLink">Product Link:</label>
                                <input type="url" class="form-control" id="productLink" placeholder="Enter product link" required>
                            </div>
                            <div class="form-group">
                                <label for="productNo">Product Number:</label>
                                <input type="number" class="form-control" id="productNo" placeholder="Enter product number" required oninput="checkProductNumber(this)">
                                <span id="productNoError" style="color: red;"></span>
                            </div>
                            <div class="form-group">
                                <label for="yourEmail">Your Email:</label>
                                <input type="email" class="form-control" id="yourEmail" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea class="form-control" id="description" rows="4" placeholder="Enter product description" required></textarea>
                            </div>
                            <input type="submit" name="submitDE" value="Submit" class="btn btn-primary btn-user btn-block" />
                        </form>
                    </div>
                </div>

                <!-- Footer -->
                <?php utils::component("footer"); ?>
                <!-- Footer -->
            </div>
        </div>
        <!-- Scripts -->
        <?php utils::component("scripts"); ?>
        <!-- Scripts -->
</body>

</html>