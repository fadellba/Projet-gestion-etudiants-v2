<?php
class Database
{
    private $host = "localhost";
    private $port = 5432;
    private $user = "postgres";
    private $password = "passer";
    private $dbname = "gestion_ecole_v2";

    function getConnection()
    {
        try {
            $conn = new PDO(
                "pgsql:host={$this->host};port={$this->port};dbname={$this->dbname}",
                $this->user,
                $this->password,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
            );
            return $conn;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
