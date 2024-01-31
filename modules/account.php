<?php
class account extends database
{
    public static function email_exists()
    {
        if (http::is_method("post")) {
            try {
                $email = http::input("email");

                $stmt = "SELECT * FROM `users` WHERE email='{$email}'";
                $query = parent::$con->prepare($stmt);
                $query->execute();
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $data = $query->fetch();
                return $data;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public static function username_exists()
    {
        if (http::is_method("post")) {
            try {
                $username = http::input("username");

                $stmt = "SELECT * FROM `users` WHERE username='{$username}'";
                $query = parent::$con->prepare($stmt);
                $query->execute();
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $data = $query->fetch();
                return $data;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public static function login()
    {
        if (http::is_method("post")) {

            try {
                $email = http::input("email");
                $password = http::input("password");

                $stmt = "SELECT * FROM `users` WHERE email='{$email}' AND password='{$password}' ";
                $query = parent::$con->prepare($stmt);
                $query->execute();
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $data = $query->fetch();
                if ($data) {
                    session::set("auth_id", $data["id"]);
                    session::set("is_role", $data["is_role"]);
                    msg::alert("Login successfully");
                    http::redirect("index.php");
                } else {
                    msg::alert("Invalid credentials");
                }
                return $data;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
    public static function signup()
    {
        if (http::is_method("post")) {
            $first_name = http::input("first_name");
            $last_name = http::input("last_name");
            $email = http::input("email");
            $username = http::input("username");
            $password = http::input("password");
            $cpassword = http::input("cpassword");
            $phone = http::input("phone");
            $is_role = 0;
            $is_active = 1;
            $created_at = date('Y-m-d H:i:s');
            $updated_at = date('Y-m-d H:i:s');

            try {
                if (self::email_exists()) {
                    msg::alert("This email already exists");
                } else if (self::username_exists()) {
                    msg::alert("This username already exists");
                } else if ($password != $cpassword) {
                    msg::alert("Both passwords not matched!");
                } else {
                    $stmt = "INSERT INTO `users` (`first_name`,`last_name`,`email`,`username`,`phone`,`password`,`is_role`,`is_active`,`created_at`, `updated_at`) 
                VALUES ('{$first_name}','{$last_name}','{$email}','{$username}','{$phone}','{$password}','{$is_role}','{$is_active}','{$created_at}','{$updated_at}')";
                    $query = parent::$con->prepare($stmt);
                    $data = $query->execute();
                    msg::alert("Account created successfully");
                    http::redirect("login.php");
                }
                return $data;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public static function profile()
    {
        if (http::is_method("post")) {
            try {
                $id = http::input("id");
                $first_name = http::input("first_name");
                $last_name = http::input("last_name");
                $email = http::input("email");
                $password = http::input("password");
                $country = http::input("country");
                $state = http::input("state");
                $city = http::input("city");
                $address = http::input("address");
                $postal_code = http::input("postal_code");
                $phone = http::input("phone");
                $updated_at = date('Y-m-d H:i:s');

                $stmt = "UPDATE `users` SET `first_name`='{$first_name}', `last_name`='{$last_name}', `email`='{$email}', `password`='{$password}',
                `country`='{$country}',`state`='{$state}', `city`='{$city}', `address`='{$address}', `postal_code`='{$postal_code}',
                `phone`='{$phone}', `updated_at`='{$updated_at}'  WHERE id={$id}";
                $query = parent::$con->prepare($stmt);
                $data = $query->execute();
                http::redirect("users.php");

                return $data;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public static function delete()
    {
        if (http::is_get("id")) {
            try {
                $id = http::input("id");
                $stmt = "DELETE FROM users WHERE id={$id}";
                $query = parent::$con->prepare($stmt);
                $query->execute();

                http::redirect("users.php");
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}


$account = new account();
