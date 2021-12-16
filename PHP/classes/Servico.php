<?php
    require_once("Conexao.php");
    class Servico{

        private $idServico;
        private $desc;
        private $texto;
        private $foto;

        public function getIdServico(){
            return $this->idServico;
        }

        public function getDesc(){
            return $this->desc;
        }

        public function getTexto(){
            return $this->texto;
        }

        public function getFoto(){
            return $this->foto;
        }

        public function setIdServico($idServico){
            $this->idServico = $idServico;
        }

        public function setDesc($desc){
            $this->desc = $desc;
        }

        public function setTexto($texto){
            $this->texto = $texto;
        }

        public function setFoto($foto){
            $this->foto= $foto;
        }


        public function getIdByName($nome){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("SELECT idServico FROM tbservico WHERE textoServico=:nome");
            $stmt->execute(['nome' => $nome]);
            $resultado= $stmt->fetch();

            return $resultado;
            echo $resultado; 

        }
        public function getNameById($id){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("SELECT textoServico FROM tbservico WHERE idServico=:id");
            $stmt->execute(['id' => $id]);
            $resultado= $stmt->fetch();

            return $resultado;
            echo $resultado; 

        }

        public function cadastrar($servico){
            $conexao = Conexao::conectar();
            //prepare statement
            $stmt = $conexao->prepare("INSERT INTO tbservico(descServico,textoServico,fotoServico)
            VALUES(?, ?, ?)");
            $stmt->bindValue(1, $servico->getDesc()); 
            $stmt->bindValue(2, $servico->getTexto());
            $stmt->bindValue(3, $servico->getFoto());

            $stmt->execute();
        }


        public function listarServicos(){
            $conexao = Conexao::conectar();
            $resultado = $conexao->query("SELECT idServico,descServico,textoServico,fotoServico FROM tbservico");
            return $resultado->fetchAll();

        }
    }
?>