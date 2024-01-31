<?php require_once "./app/bootstrap.php"; ?>
<?php middleware::login("auth_id", "index.php"); ?>
<?php utils::module("account"); ?>
<?php account::login(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <?php utils::component("head"); ?>
</head>

<body class="bg-gradient-primary bg-login-image">
    <main class="container">
        <div class="row justify-content-center vh-100">
            <div class="col-sm-6 m-auto">
                <form method="POST" class="card shadow border rounded-5">
                    <div class="card-header px-4 text-center bg-transparent border-0 pt-5">
                        <h1 class="card-title mb-2 h2">Login!</h1>
                        <p class="m-0 h6"> Don't have an account?<a class="small" href="signup.php"><b> Signup!</b></a></p>
                    </div>
                    <div class="card-body px-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label class="mb-0" for="email"><b>Email</b></label>
                                    <input type="text" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label class="mb-0" for="password"><b>Password</b></label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer px-4 bg-transparent border-0 pb-5">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php utils::component("scripts"); ?>
</body>

</html>