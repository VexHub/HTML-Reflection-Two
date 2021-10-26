<?php
require __DIR__ . '/../vendor/autoload.php';

try {
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__) . '');
    $dotenv->load();
    $dotenv->required(["SQL_HOST_CONTENT", "SQL_HOST_CONTACT", "SQL_DB_ARTICLES", "SQL_DB_CONTACT"]);
} catch (Exception $e) {
    throw $e;
}

class contactObj
{
    public $query = "INSERT INTO submitted_data(`Name`, `Email`, `Phone_number`, `Subject`, `Message`, `Market_consent`)";
    public $db;
    public $runDb = NULL;
    public $fullDb = [];

    public function createConnection() {
        try {
            $this->db = new PDO('mysql:host='.$_ENV["SQL_HOST_CONTACT"].';dbname='.$_ENV["SQL_DB_CONTACT"], 
            $_ENV["SQL_USER"], $_ENV["SQL_PASS"]);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function strCheck($val) {
        if (gettype($val) != 'string') {
            return false;
        } else {
            return true;
        }
    }

    public function emailCheck($val) {
        if (filter_var($val, FILTER_VALIDATE_EMAIL) != false) {
            return true;
        } else {
            return false;
        }
    }

    public function phoneCheck($val) {
        $regCheck = preg_match('/^\\(?0\\d{3,5}\\)?\\s?\\d{3,4}\\s?\\d{3,4}(\\s?\\#(\\d{4}|\\d{3}))?$/', $val);
        if ($regCheck != false ) {
            return true;
        } else {
            return false;
        }
    }

    public function runQuery(string $name, string $email, string $phoneNumber, string $subject, string $message, bool $marketConsent) {
        $queryString = $this->query . " VALUES (:Name, :Email, :Phone_number, :Subject , :Message , :Market_consent)";
        $this->runDb = $this->db->prepare($queryString);
        $this->runDb->bindParam(':Name', $name, PDO::PARAM_STR);
        $this->runDb->bindParam(':Email', $email, PDO::PARAM_STR);
        $this->runDb->bindParam(':Phone_number', $phoneNumber, PDO::PARAM_STR);
        $this->runDb->bindParam(':Subject', $subject, PDO::PARAM_STR);
        $this->runDb->bindParam(':Message', $message, PDO::PARAM_STR);
        $this->runDb->bindParam(':Market_consent', $marketConsent, PDO::PARAM_BOOL);
        $this->runDb->execute();
    }

    function isMarket() {
        if (isset($_POST['marketing_preference'])) {
            if( filter_input(INPUT_POST, 'marketing_preference', FILTER_SANITIZE_NUMBER_INT) == 1 ) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
        
    }

    public function inputError(string $postKey, $func, $obj) {
        try {
            if(!isset($_POST[$postKey])) {
                echo '';
            } else {
                if($_POST[$postKey] == "" || call_user_func(array($obj, $func), $_POST[$postKey]) != true) {
                    echo 'has-error';
                } else {
                    echo '';
                }
            }
        } catch (Exception $e) {
            echo '';
        }
    }

    public function inputCheck() {
        try {
            if (
                !isset($_POST['name']) &&
                !isset($_POST['email']) &&
                !isset($_POST['telephone']) &&
                !isset($_POST['subject']) &&
                !isset($_POST['message'])
                
            ) {
                return false;
            } else if(
                $_POST['name'] == "" ||
                $_POST['email'] == "" ||
                $_POST['telephone'] == "" ||
                $_POST['subject'] == "" ||
                $_POST['message'] == ""
            ) {
                return false;
                
            } else if (
                $this->strCheck($_POST['name']) != true ||
                $this->emailCheck($_POST['email']) != true ||
                $this->phoneCheck($_POST['telephone']) != true ||
                $this->strCheck($_POST['subject']) != true ||
                $this->strCheck($_POST['message']) != true
            ) {
                return false; 
            } else {
                return true;
            }
        } catch (Exception $e) {
            throw $e;
        }
    } 
}

/** @test */
// $testObj = new contactObj();
// $testObj->createConnection();
// try {
//     $testObj->runQuery('Vex Ward', 'test@test.com', '00000 000 000', 'Test', 'Please let this work', false);
// } catch (Exception $e) {
//     throw $e;
// }


?>