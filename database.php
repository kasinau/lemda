<?php
if (!isset($_SESSION)) {
    session_start();
}

class DataBase
{
    private $db_server, $connection = null, $dbh;
    public $result;
    private static $instance = null;
    private $user = 'root', $password = 'root', $dsn = "mysql:dbname=lemda_db;host=127.0.0.1";

    private function __construct()
    {
        try {
            $this->dbh = new PDO($this->dsn, $this->user, $this->password, array(PDO::ATTR_PERSISTENT => true));
            if (!$this->dbh) {
                throw new Exception('Conection failed, please, try again later...');
            }

            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {

            $this->setError($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getData()
    {
        try {
            $query = $this->dbh->query('SELECT *
                FROM lemda_table');
            return $query->fetchAll();
        }
        catch (PDOException $e){
            $this->setError($e->getMessage(), 'Can not get news...');
        }
    }

    public function insertData($data)
    {
        try {
            $query = $this->dbh->prepare('INSERT INTO lemda_table(Alpha, Beta, Gamma)' .
                'VALUES(:Alpha, :Beta, :Gamma)');
            $query->bindParam(':Alpha', $data['Alpha']);
            $query->bindParam(':Beta', $data['Beta']);
            $query->bindParam(':Gamma', $data['Gamma']);
            $query->execute();
        } catch (PDOException $e){
            $this->setError($e->getMessage(), 'Can not insert treaty...');
        }
    }

    public function setError($error, $errorMessage = '')
    {
        error_log("\n" . date('Y-m-d H:i:s') . ' ' . $error, 3, "my_errors.log");
        exit();
    }
}