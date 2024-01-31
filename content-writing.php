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
                        <h2 class="text-center mb-4">Submitt Your Article</h2>
                        <form method="post">
                            <div class="form-group">
                                <label for="assignmentTitle">Article Title:</label>
                                <input type="text" class="form-control" id="assignmentTitle" placeholder="Enter assignment title" required>
                            </div>
                            <div class="form-group">
                                <label for="yourEmail">Your Email:</label>
                                <input type="email" class="form-control" id="yourEmail" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="assignmentDescription">Article Description:</label>
                                <textarea class="form-control" id="assignmentDescription" rows="4" placeholder="Enter assignment description" required></textarea>
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
    </div>
    <!-- Scripts -->
    <?php utils::component("scripts"); ?>
    <!-- Scripts -->
</body>

</html>