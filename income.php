<?php require_once "./app/bootstrap.php"; ?>
<?php middleware::logout("auth_id", "login.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Income</title>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">INCOME</h1>
                    </div>
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