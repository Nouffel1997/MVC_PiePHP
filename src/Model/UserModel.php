<?php

    class UserModel
    {

        protected $id;
        protected $email;
        protected $password;
        private $tableName = 'users';
        private $dbConn;
      
        function setId($id) { $this->id = $id; }
        function getId() { return $this->id; }
        function setEmail($email) { $this->email = $email; }
        function getEmail() { return $this->email; }
        function setPassword($password) { $this->password = $password; }
        function getPassword() { return $this->password; }
        

         public function __construct() {
            require_once('DbConnect.php');
            $db = new DbConnect();
            $this->dbConn = $db->connect();
        }
        public function insert() {
            $hashedPassword = password_hash($this->password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO $this->tableName VALUES(null, :email, :password)";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $hashedPassword);
            
            $stmt->execute();
            
            

        }

       
    }