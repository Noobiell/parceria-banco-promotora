<?php

class db
{

    private $host = 'dpbarros.mysql.dbaas.com.br';
    private $usuario = 'dpbarros';
    private $senha = 'EeyIQpMiO[';
    private $database = 'dpbarros';

    public function conexaoDb()
    {

        $conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        mysqli_set_charset($conexao, 'utf8');

        if (mysqli_connect_errno()) {
            echo 'Erro de conexão ' . mysqli_error();
        }

        return $conexao;
    }
}
