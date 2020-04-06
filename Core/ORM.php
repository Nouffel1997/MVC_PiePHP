<?php
class ORM extends DbConnect {
    public function create($table, $fields)
    {
        $sql = "INSERT INTO $table VALUES($fields)";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':fields', $fields);
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

    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id=$id";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->execute();
        return true;
    }

}