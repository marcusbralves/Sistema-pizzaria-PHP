<?php
    if(count($_POST) > 0){
//1.Pegar os valores do formulario
$email = $_POST["email"];
$senha = $_POST["senha"];
//2.conexão com banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=restaurante_bd", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";

  //3.verificar  se email e senha estão no BD
  $stmt = $conn->prepare("SELECT codigo FROM usuario WHERE email=:email AND senha=md5(:senha)");
  $stmt->bindParam(':email', $email, PDO::PARAM_STR);
  $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
  $stmt->execute();

  $result = $stmt->fetchAll();
  $qtd_usuarios = count($result);
  
  if($qtd_usuarios == 1){
      $resultado["msg"] = "Usuario encontrado!";
      $resultado["cod"] = 1;
  }else if($qtd_usuarios == 0){
    $resultado["msg"] =  "Email ou Senha errado...";
    $resultado["cod"] = 0;
  }

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;

    }
include("index.php");

?>