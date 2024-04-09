<?php


// Importar o Banco.class.php:
require_once('Banco.class.php');

class Contato
{
    // Atributos:
    public $id;
    public $nome;
    public $email;
    public $telefone;

    // Métodos:
    public function Cadastrar()
    {
        $sql = "INSERT INTO contatos(nome, email, telefone) 
        VALUES (?, ?, ?)";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->nome, $this->email, $this->telefone]);
        Banco::desconectar();
        return $comando->rowCount();
    }
    public function Listar()
    {
        $sql = "SELECT * FROM contatos";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute();

        $arr_resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $arr_resultado;
    }

    public function ListarPorID()
    {
        $sql = "SELECT * FROM contatos WHERE id = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->id]);
        $arr_resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $arr_resultado;
    }
    public function Apagar(){
        $sql = "DELETE FROM contatos WHERE id = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->id]);
        Banco::desconectar();
        return $comando->rowCount();
    }
    public function Editar(){
        $sql = "UPDATE contatos SET nome=?, email=?, telefone=? WHERE id=?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->nome, $this->email, $this->telefone, $this->id]);
        Banco::desconectar();
        return $comando->rowCount();
    }
}
