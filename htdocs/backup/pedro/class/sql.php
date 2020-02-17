<?php 

    class Sql extends PDO {

        private $conn; 

        public function __construct() {
            
            try {

                $this->conn = new PDO("mysql:host=localhost;dbname=users;", "root", "");// conexao com PDO que é um objeto do php
              
            } catch(PDOException $e) {

                echo $e->getMessage(); // se existir erro de pdo, informa
            }
        }
        
        // retorna a conexão pdo já construída
        public function getConn() {

            return $this->conn;
        
        }

    }