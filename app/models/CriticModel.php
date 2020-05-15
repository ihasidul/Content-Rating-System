<?php
require_once INCLUDES . "DataAccess.php";
class CriticModel
{
    public $name;
    public $id;
    public $email;
    public $phone;

    public function setCriticInformation($name, $id, $email, $phone)
    {
        $this->name = $name;
        $this->id = $id;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getTotalNumberOfCritic()
    {
        $sql = "SELECT * FROM critics";
        $db = new DataAccess();

        $result = $db->getData($sql);

        return $result->num_rows;
    }
    function insertCritic($name, $id, $email, $phone)
    {

        try {
            //this function will be needing to insert user in login table
            $sql = "insert into critics (name,id,email,phone) values ('" + $name + "','" + $id + "','" + $email + "','" + $phone + "');";
            $db =  new DataAccess();
            $db->executeQuery($sql);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    function deleteCritic($id)
    {

        try {
            //this function will be needing to insert user in login table
            $sql = "delete from critics where id='" + $id + "'";
            $db =  new DataAccess();
            $db->executeQuery($sql);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    public function getAllCritic()
    {
        $sql = "SELECT * FROM critics";
        $db = new DataAccess();

        $result = $db->getData($sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $users[] =  array(
                    "User ID" => $row["id"],
                    "Name" => $row["name"], "Email" => $row["email"], "Phone" => $row["phone"]
                );
            }
            return $users;
        } else {
            echo "0 results";
        }
    }
}
