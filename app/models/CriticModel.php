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
