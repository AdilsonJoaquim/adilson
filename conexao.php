<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname ="adilson";
$port = 3306;

try{
    $conn = new PDO("mysql:host=$host;port=$port; dbname=" . $dbname, $user, $pass);
   
   // echo "Conexão com banco realizada com sucesso";

} catch(PDOException $err){
    echo "Erro: conexão com banco de dados não foi realizada com sucesso!". $err->getMessage();
};

?>
