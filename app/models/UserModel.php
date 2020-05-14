<?php
require_once INCLUDES . "DataAccess.php";
class UserModel
{


    public $Email;
    public $Userid;
    public $passward;

    public function setContentInfo($Email, $Userid, $password)
    {
        $this->id = $Email;
        $this->name = $Userid;
        $this->genre = $password;
    }
    public function getTotalNumberOfUser()
    {
        $sql = "SELECT * FROM user";
        $db = new DataAccess();

        $result = $db->getData($sql);

        return $result->num_rows;
    }
}
