<?php

class Connexion
{
    private $file;
    private $data;
    private $pdo;

    private $DBUSER;
    private $DBPASSWORD;
    private $DBNAME;
    private $DBHOST;

    public function __construct()
    {
        $this->file = 'Connexion/config.json';
        $this->data = json_decode(file_get_contents($this->file));

        $this->DBUSER = $this->data->database->user;
        $this->DBPASSWORD =  $this->data->database->password;
        $this->DBNAME =  $this->data->database->dbName;
        $this->DBHOST =  $this->data->database->host;

        try{
            $connexion = new PDO("mysql:host={$this->DBHOST};dbname={$this->DBNAME};charset=UTF8",$this->DBUSER, $this->DBPASSWORD); 
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            error_Log("PDO  instancié");
            $this->pdo = $connexion;
           

        }catch(PDOException $exception){
            error_log ("PDO non instancié : ($exception)");
        }
    }


    public function getPdo(): PDO{
        return $this->pdo;
    }
}