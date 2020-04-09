<?php

class UserModel extends Entity
{

    protected $id;
    private $email;
    private $password;
    private $tableName = 'users';
    private $dbConn;

    function setId($id)
    {
        $this->id = $id;
    }
    function getId()
    {
        return $this->id;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }
    function getEmail()
    {
        return $this->email;
    }
    function setPassword($password)
    {
        $this->password = $password;
    }
    function getPassword()
    {
        return $this->password;
    }


    public function __construct()
    {
        require_once('Database.php');
        $db = new DbConnect();
        $this->dbConn = $db->connect();
    }
    public function save()
    {
        $sql = "INSERT INTO $this->tableName (email, password) VALUES(null, :email, :password)";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
    }


    public function create()
    {
        $sql = "INSERT INTO $this->tableName VALUES(null, :email, :password)";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
    }

    public function read()
    {
        $sql = "SELECT * FROM $this->tableName WHERE id=:id";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }

    public function update()
    {
        $sql = "UPDATE $this->tableName SET  WHERE id=:id";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }

    public function delete()
    {
        $sql = "DELETE FROM $this->tableName WHERE id=:id";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }

    public function read_all()
    {
        $sql = "SELECT * FROM $this->tableName";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->execute();
    }
}
