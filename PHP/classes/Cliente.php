<?php
    require_once("Conexao.php");
    class Cliente{

        private $idCliente;
        private $nome;
        private $cpf;
        private $telefone;

        public function getIdCliente(){
            return $this->idCliente;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getCPF(){
            return $this->cpf;
        }

        public function getTelefone(){
            return $this->telefone;
        }


        public function setIdCliente($idCliente){
            $this->idCliente = $idCliente;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setCPF($cpf){
            $this->cpf = $cpf;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getIdByName($nome){
            $conexao = Conexao::conectar();

            $stmt = $conexao->prepare("SELECT idCliente FROM tbcliente WHERE nomeCliente=:nome");
            $stmt->execute(['nome' => $nome]);
            $resultado= $stmt->fetch();

            return $resultado;
            echo $resultado; 

        }

         public function getNameById($id){
            $conexao = Conexao::conectar();
            
            $stmt = $conexao->prepare("SELECT nomeCliente FROM tbcliente WHERE idCliente=:id");
            $stmt->execute(['id' => $id]);
            $resultado= $stmt->fetch();

            return $resultado;
            echo $resultado; 

        }



        public function cadastrar($cliente){
            $conexao = Conexao::conectar();
            //prepare statement
            $stmt = $conexao->prepare("INSERT INTO tbcliente (nomeCliente, cpfCliente, telefoneCliente)
                VALUES(?, ?, ?)");
            $stmt->bindValue(1, $cliente->getNome()); 
            $stmt->bindValue(2, $cliente->getCPF());
            $stmt->bindValue(3, $cliente->getTelefone());

            $stmt->execute();
        }

        public function listarCliente(){
            $conexao = Conexao::conectar();
            $resultado = $conexao->query("SELECT idCliente, nomeCliente, cpfCliente, telefoneCliente FROM tbcliente");
            return $resultado->fetchAll();

        }
    }
?>