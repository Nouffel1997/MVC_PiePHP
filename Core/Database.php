<?php
namespace Core;

    class Database {
       private  $host = 'localhost';
       private  $dbName = 'mvc_piephp';
       private  $user = 'root';
       private  $pass = 'Noufnouf954';

       public function connect() {
            try {
                $conn = new \PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->user, $this->pass);
                $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                return $conn;
            } catch (\PDOException $e) {
                echo 'Database error: ' . $e->getMessage();
            }

        }
    }
?>