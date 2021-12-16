<?php
    require "Conexao.php";
    class Produto{

        private $desc;
        private $texto;
        private $foto;

        public function getDesc(){
            return $this->desc;
        }

        public function getTexto(){
            return $this->texto;
        }

        public function getFoto(){
            return $this->foto;
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


        public function cadastrar($produto){
            $conexao = Conexao::conectar();
            //prepare statement
            $stmt = $conexao->prepare("INSERT INTO tbproduto(descProduto,textoProduto,fotoProduto, idUsuario)
            VALUES(?, ?, ?,?)");
            $stmt->bindValue(1, $produto->getDesc()); 
            $stmt->bindValue(2, $produto->getTexto());
            $stmt->bindValue(3, $produto->getFoto());
            $stmt->bindValue(4, 4);

            $stmt->execute();
        }
        public function listarProdutos(){
            $conexao = Conexao::conectar();
            $resultado = $conexao->query("SELECT idProduto,descProduto,textoProduto,fotoProduto FROM tbproduto");
            return $resultado->fetchAll();

        }
    }
?>