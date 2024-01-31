<?php require_once "./app/bootstrap.php"; ?>
<?php middleware::logout("auth_id", "login.php"); ?>
<?php utils::module("work"); ?>
<?php work::article(); ?>
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
                <main class="container my-5 py-5">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 m-auto">
                            <form method="POST" class="card shadow border rounded-5">
                                <div class="card-header px-4 text-center bg-transparent border-0 pt-5">
                                    <h1 class="card-title mb-2 h2">Article!</h1>
                                </div>
                                <div class="card-body px-4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group mb-3">
                                                <label class="mb-0" for="name"><b>Title</b></label>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mb-3">
                                                <label class="mb-0" for="email"><b>Email</b></label>
                                                <input type="text" name="email" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mb-3">
                                                <label class="mb-0" for="description"><b>Article Description:</b></label>
                                                <textarea class="form-control" name="description" rows="4" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer px-4 bg-transparent border-0 pb-5">
                                    <button type="submit" name="submit" class="btn btn-primary btn-block">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
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