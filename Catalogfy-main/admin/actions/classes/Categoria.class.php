<?php
require_once('Banco.class.php');
class Categoria
{
    public $id;
    public $nome;


    public function Listar()
    {
        $sql = "SELECT * FROM categoria";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute();

        $arr_resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $arr_resultado;
    }
    public function Cadastrar()
    {
        $sql = "INSERT INTO categoria(nome) 
    VALUES (?)";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->nome]);
        Banco::desconectar();
        return $comando->rowCount();
    }

    public function Modificar()
    {
        $sql = "UPDATE categoria SET nome=? WHERE id=?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->nome, $this->id]);
        Banco::desconectar();
        return $comando->rowCount();
    }

    public function Remover()
    {
        $sql = "DELETE FROM categoria WHERE id = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->id]);
        Banco::desconectar();
        return $comando->rowCount();
    }
}

?>