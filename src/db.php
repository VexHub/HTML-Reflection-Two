<?php
require __DIR__ . '/../vendor/autoload.php';

try {
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__) . '');
    $dotenv->load();
    $dotenv->required(["SQL_HOST_CONTENT", "SQL_HOST_USER", "SQL_DB_ARTICLES", "SQL_DB_CONTACT"]);
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

/** @test */
$testObj = new articleObj();
// $testObj->setPull('SELECT * FROM news');
$testObj->createConnection();
$testObj->runQuery();
var_dump($testObj->fullDb);



var_dump($testObj->call('Article_Img'));

// $test = new PDO('mysql:host='.$_ENV["SQL_HOST_CONTENT"].';dbname='.$_ENV["SQL_DB_ARTICLES"], 
//     $_ENV["SQL_USER"], $_ENV["SQL_PASS"]);

// $testArray = [];
// $testDb = $test->prepare('SELECT * FROM news JOIN users ON users.User_Id = news.User_Id ');
// $testDb->execute();
// $dbArray = $testDb->fetchAll(PDO::FETCH_ASSOC);
// foreach($dbArray as $row) {
//     array_push($testArray, [$row][0]);
// }
// var_dump($testArray);
?>