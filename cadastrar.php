<?php
include_once "conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$query_usuario = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
$cad_usuario = $conn->prepare($query_usuario);
$cad_usuario->bindParam(':nome', $dados['nome']);
$cad_usuario->bindParam(':email', $dados['email']);

$cad_usuario->execute();
if($cad_usuario->rowCount()){

    $retorna = ['erro' => false, 'msg' =>'Cadastrado com sucesso'];
}else{
    $retorna = ['erro' => true, 'msg' =>'Não Cadastrado'];

}
echo json_encode($retorna);

?>