<?php

/*
TODO:
    .write insert_user method
    .write check_user method
    .write update_password method
    .write delete_user method
*/
require_once INCLUDES . "DataAccess.php";
class LoginModel
{
    public $id;
    public $password;
    public $permissionType;



    // function __construct($id, $password)
    // {
    //     $this->id = $id;
    //     $this->password = $password;
    // }

    function setId($id)
    {
        $this->id = $id;
    }
    function setPassword($password)
    {
        $this->password = $password;
    }
    function setLoginInfo($id, $password, $permissionType)
    {
        $this->id = $id;
        $this->password = $password;
        $this->permissionType = $permissionType;
    }



    function insertUser($id, $password, $permission)
    {
        //echo "i am in insert ";

        try {
            //this function will be needing to insert user in login table
            $sql = "insert into login (id,password,permission) values ('" . $id . "','" . $password . "','" . $permission . "');";
            var_dump($sql);
            $db =  new DataAccess();

            $db->executeQuery($sql);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    // public function  deleteUser($id)
    // {
    //     try {
    //         //this function will be needing to insert user in login table
    //         $sql = "delete from login  where id='" . $id . "'";
    //         $db =  new DataAccess();
    //         $db->executeQuery($sql);
    //     } catch (Exception $e) {
    //         echo 'Caught exception: ',  $e->getMessage(), "\n";
    //     }
    // }

    public function getLatestAutoId() //this will get latest auto id of login table
    {
        $sql = "SELECT MAX(autoId) AS autoId FROM login";
        $db =  new DataAccess();
        $result = $db->getData($sql);


        while ($row = $result->fetch_assoc()) {
            $data =  $row['autoId'];
        }
        return $data;
    }


    function validateLogin($id, $password)
    {
        try {

            //echo $id . " " .  $password;
            //this method will find if the user exists or not
            $sql = "SELECT * FROM login WHERE id='" . $id . "' AND password='" . $password . "'";
            $db =  new DataAccess();
            $result = $db->getData($sql);

            //these are for testing 
            //while ($row = mysqli_fetch_assoc($result)) {
            // echo "id: " . $row["id"] . " - Pass: " . $row["password"] . " " . $row["permission"] . "<br>";
            //}


            echo "I am in validateLogin";

            if ($result->num_rows > 0) {
                echo "I am in row 1 er beshi";

                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    function getPermissionType($id, $password)
    {
        try {
            //this method will find if the user exists or not
            $sql = "SELECT permission FROM login WHERE id='" . $id . "' AND password='" . $password . "'";
            $db =  new DataAccess();
            $result = $db->getData($sql);
            if ($result->num_rows == 1) {

                while ($row = $result->fetch_assoc()) {
                    $permissionType .=  $row['permission'] . ""; //don't put space between "" here. It ruined a lot of my time
                    // echo "permission " . $row["permission"];
                    //$permissionType = (string) $row["permission"];
                }

                //echo "I am in Permisson stuff";
                //echo $permissionType;
                //echo gettype($permissionType);
                return $permissionType;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    public function changePassword($id, $password)
    {
        try {
            $sql = "UPDATE `login` SET `password`= '{$password}' WHERE id = '{$id}'";
            $db =  new DataAccess();

            $db->executeQuery($sql);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
}
