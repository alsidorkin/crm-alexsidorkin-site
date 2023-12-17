<?php 

class Database{
private static $instance= null;
private $conn;
private function __construct(){
   $config= require_once 'config.php';
   $db_host =$config['db_host'] ;
   $db_user =$config['db_user']  ;
   $db_pass =$config['db_pass']  ;
   $db_name =$config['db_name']  ;

   try{
    $dsn="mysql:host=$db_host;dbname=$db_name";
    $this->conn=new PDO($dsn,$db_user,$db_pass);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }catch(PDOException $e){
    echo "Connect filed :".$e->getMessage();
   };
}

public static function checkFuncEx($value){
  echo '<pre>';
  print_r($value);
  echo '</pre>';
  exit();
}
public static function checkFunc($value){
  echo '<pre>';
  print_r($value);
  echo '</pre>';
}
// возвращает сам обьект класса Database
public static function getInstance(){

    if(!isset(self::$instance)){
        self::$instance =new self();
    }
    return self::$instance;
}
// метод который возвращает обьект подключения к бд
public function getConnection(){

    return $this->conn;
}
}


