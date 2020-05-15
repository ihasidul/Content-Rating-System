<?php
require_once INCLUDES . "DataAccess.php";
class ContentCreatorModel
{


    public $Email;
    public $Userid;
    public $passward;

    public function setContentCreatorInfo($Email, $Userid, $password)
    {
        $this->id = $Email;
        $this->name = $Userid;
        $this->genre = $password;
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
}