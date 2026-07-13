<?php
    class db{
        private $host = 'localhost';
        private $user = 'root';
        private $hash = '';
        private $database = 'lifebook';

        public $conexao;
        public function conectar(){
                try {
                    $this->conexao = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=utf8mb4" ,$this->user,$this->hash);
                    $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    return $this->conexao;
                } catch (PDOException $e) {
                    die("ERRO DE CONEXÃO: " . $e->getMessage());
                }
            }
        }
?>