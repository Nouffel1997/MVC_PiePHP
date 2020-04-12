<?php
namespace src\Model;
class UserModel extends \Core\Entity
{

    
    public $email;
    public $password;
    public $tableName = 'users';
    private $dbConn;
   
    public function __construct()
    {
       
        $db = new \Core\Database();
        $this->dbConn = $db->connect();
        var_dump($db);
    }
    
    function getEmail()
    {
        return $this->email;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }
    function getPassword()
    {
        return $this->password;
    }
    function setPassword($password)
    {
        $this->password = $password;
    }
    


    
    public function save()
    {
        $sql = "INSERT INTO users (email, password) VALUES(:email, :password)";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
    }


    public function create()
    {
        $sql = "INSERT INTO users (email, password) VALUES(:email, :password)";
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
