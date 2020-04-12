<?php
namespace Core;
namespace Database;
class ORM
{
    public function create($table, $fields)
    {
        require_once('UserModel.php');
        $fields = array_values(['memail' => $email, 'mpassword' => $password]);
        $table = 'users';
        $sql = "INSERT INTO $table VALUES($fields)";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->execute();
       
    }

    public function read($table, $id)
    {
        $sql = "SELECT FROM $table WHERE id=$id";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->execute();
        return array();
    }

    public function update($table, $id, $fields)
    {

        $sql = "UPDATE $table SET $fields WHERE id=$id";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->execute();
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id=$id";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->execute();
        return true;

    }
}
