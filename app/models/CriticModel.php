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
}
