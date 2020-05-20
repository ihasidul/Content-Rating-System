<?php
require_once INCLUDES . "DataAccess.php";
class ContentCreatorModel
{
    public $name;
    public $id;
    public $email;
    public $phone;



    public function setContentCreatorInfo($name, $id, $email, $phone)
    {
        $this->name = $name;
        $this->id = $id;
        $this->email = $email;
        $this->phone = $phone;
    }
    public function getTotalNumberOfContentCreator()
    {
        $sql = "SELECT * FROM contentcreator";
        $db = new DataAccess();

        $result = $db->getData($sql);

        return $result->num_rows;
    }

    public function getAllContentCreator()
    {
        $sql = "SELECT * FROM contentcreator";
        $db = new DataAccess();

        $result = $db->getData($sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $users[] =  array(
                    "User ID" => $row["id"],
                    "Name" => $row["name"],
                    "Email" => $row["email"],
                    "Phone" => $row["phone"]
                );
            }
            return $users;
        } else {
            echo "0 results";
        }
    }

    function insertContentCreator($name, $id, $email, $phone)
    {

        try {
            //this function will be needing to insert user in login table
            $sql = "insert into contentcreator (name,id,email,phone) values ('" . $name . "','" . $id . "','" . $email . "','" . $phone . "');";
            $db =  new DataAccess();
            $db->executeQuery($sql);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    function deleteContentCreator($id)
    {

        try {
            //this function will be needing to insert user in login table
            $sql = "delete from contentcreator where id='" . $id . "'";
            $db =  new DataAccess();
            $db->executeQuery($sql);
            $sql1 = "delete from login  where id='" . $id . "'";
            var_dump($sql1);
            $db1 =  new DataAccess();
            $db1->executeQuery($sql1);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    public function getContentCreatroById($id)
    {
        $sql = "SELECT * FROM contentcreator where id = '{$id}'";
        $db = new DataAccess();

        $result = $db->getData($sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $users[] =  array(
                    "User ID" => $row["id"],
                    "Name" => $row["name"],
                    "Email" => $row["email"],
                    "Phone" => $row["phone"]
                );
            }
            return $users;
        } else {
            echo "0 results";
        }
    }
}
