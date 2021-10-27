<?php
require __DIR__ . '/../vendor/autoload.php';

try {
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__) . '');
    $dotenv->load();
    $dotenv->required(["SQL_HOST_CONTENT", "SQL_DB_ARTICLES", "SQL_DB_CONTACT"]);
} catch (Exception $e) {
    throw $e;
}

class articleObj
{
    public $query = 'SELECT * FROM news';
    public $db;
    public $runDb = NULL;
    public $fullDb = [];

    public function createConnection() {
        try {
            $this->db = new PDO('mysql:host='.$_ENV["SQL_HOST_CONTENT"].';dbname='.$_ENV["SQL_DB_ARTICLES"], 
            $_ENV["SQL_USER"], $_ENV["SQL_PASS"]);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function runQuery() {
        $queryString = $this->query . ' JOIN users ON users.User_Id = news.User_Id';
        $queryString .= ' ORDER BY Date DESC LIMIT 3';
        $this->runDb = $this->db->prepare($queryString);
        $this->runDb->execute();
        $runDbArray = $this->runDb->fetchAll(PDO::FETCH_ASSOC);
        foreach($runDbArray as $row) {
            array_push($this->fullDb, [$row][0]);
        }
    }

    function call(string $call) {
        $callArr = [];
        foreach($this->fullDb as $arr) {
            array_push($callArr, [$arr][0][$call]);
        }
        return $callArr;
    }
}



?>