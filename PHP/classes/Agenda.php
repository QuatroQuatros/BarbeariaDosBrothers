<?php

    require_once("Conexao.php");
    require_once("Cliente.php");
    require_once("Servico.php");
    class Agenda{
        
        private $idAgenda;
        private $data;
        private $idCliente;
        private $idServico;

        public function getData(){
            return $this->data;
        }

        public function setData($data){
            $this->data = $data;
        }

        public function getCliente(){
            return $this->cliente;
        }

        public function getServico(){
            return $this->servico;
        }

        //set no java: public void setIdCliente(int idCliente){ this.idCliente = idCliente;}
        public function setCliente($cliente){
            $this->cliente = $cliente;
        }

        public function setServico($servico){
            $this->servico = $servico;
        }

        public function cadastrar($agenda,$cliente, $servico){
            $conexao = Conexao::conectar();
            //prepare statement
            $stmt = $conexao->prepare("INSERT INTO tbagenda(dataAgenda, idCliente,idServico, idUsuario)
            VALUES(?, ?, ?,?)");
            $stmt->bindValue(1, $agenda->getdata()); 
            $stmt->bindValue(2, $cliente->getNome());
            $stmt->bindValue(3, $servico->getTexto());
            $stmt->bindValue(4, 4);

            $stmt->execute();
        }

        public function listar($agenda){
            $conexao = Conexao::conectar();
            //prepare statement
            $querySelect =" SELECT *FROM tbagenda
                INNER JOIN tbcliente
                  ON tbagenda.idCliente = tbcliente.idCliente
                INNER JOIN tbservico  
                  ON tbagenda.idServico = tbservico.idServico
                INNER JOIN tbusuario  
                 ON tbagenda.idUsuario = tbusuario.idUsuario ";
            $resultado = $conexao->query($querySelect);                            
            $lista = $resultado->fetchAll();
            return $lista;
            return 'Cadastro realizado com sucesso';
           print_r($stmt);
        }
    }
?>