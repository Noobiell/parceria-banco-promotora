<?php
require_once('conexaoDB.php');
$banco = new db();
$conexao = $banco->conexaoDb();

$cpf = $_POST['cpf'];
$dataNasci = $_POST['dtNasci'];
$email = $_POST['email'];
$atendimento = $_POST['fAtendimento'];
$nome = $_POST['nome'];
$celular = $_POST['telefone'];
$cargo = $_POST['cargo'];

$sqlConsulta = "SELECT * FROM clientes WHERE cpf = '$cpf'";
$sqlInsert = "INSERT INTO clientes(nome, cpf, email, celular, data_cadastro, data_nascimento, cargo, atendimento) VALUES('$nome', '$cpf', '$email', '$celular', NOW(), '$dataNasci', '$cargo', '$atendimento')";

//CONSULTA O CPF NO BANCO
if ($resultadoConsulta = mysqli_query($conexao, $sqlConsulta)) {

    $registroConsulta = mysqli_fetch_array($resultadoConsulta);

    //VERIFICA SE O CPF CONSULTADO EXISTE NO BANCO
    if (!isset($registroConsulta['cpf'])) {

        //CADASTRA O CLIENTE CASO O CPF DIGITADO NÃO EXISTE NO BANCO
        if ($resultadoInsert = mysqli_query($conexao, $sqlInsert)) {

            echo 'sucesso';
        } else {

            echo 'erroQuery';
        }
    } else {

        echo 'cpfCadastrado';
    }
} else {

    echo 'erroQuery';
}
