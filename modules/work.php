<?php
class work extends database
{

    public static function assignment()
    {
        if (http::is_method("post")) {
            $name = http::input("name");
            $email = http::input("email");
            $description = http::input("description");
            $created_at = date('Y-m-d H:i:s');
            $updated_at = date('Y-m-d H:i:s');

            try {
                $stmt = "INSERT INTO `work` (`name`, `email`, `description`, `created_at`, `updated_at`) 
                VALUES ('{$name}','{$email}','{$description}','{$created_at}','{$updated_at}')";
                $query = parent::$con->prepare($stmt);
                $data = $query->execute();
                msg::alert("1 Record created successfully!"); 
                http::redirect("assignment-work.php");
                return $data;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public static function article()
    {
        if (http::is_method("post")) {
            $name = http::input("name");
            $email = http::input("email");
            $description = http::input("description");
            $created_at = date('Y-m-d H:i:s');
            $updated_at = date('Y-m-d H:i:s');

            try {
                $stmt = "INSERT INTO `work` (`name`, `email`, `description`, `created_at`, `updated_at`) 
                VALUES ('{$name}','{$email}','{$description}','{$created_at}','{$updated_at}')";
                $query = parent::$con->prepare($stmt);
                $data = $query->execute();
                msg::alert("1 Record created successfully!"); 
                http::redirect("content-writing.php");
                return $data;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

}


$work = new work();
