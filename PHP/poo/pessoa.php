<?php
    // Criando class pessoa
    class Pessoa {
        // Atributos
        private $nome;
        private $dataNascimento;
        private $altura;

        public function __construct($nome, $dataNascimento, $altura) {
            $this->setAltura($altura);
            $this->setDataNascimento($dataNascimento);
            $this->setNome($nome);
        }

        // Getter e Setter
        public function getNome() {
            return $this->nome;
        }
        public function setNome($nome) {
            // Se nome < 6 caracteres, erro
            if (strlen($nome) < 6) {
                throw new Exception("Nome {$nome} deve ter no mínimo 6 caracteres, e tem {strlen($nome)}");
            }
            // Se nome > 100 caracteres, erro
            if (strlen($nome) > 60) {
                throw new Exception("Nome deve ter no máximo 100 caracteres");
            }

            $this->nome = $nome;
        }

        public function getDataNascimento() {
            return $this->dataNascimento;
        }
        public function setDataNascimento($dataNascimento) {
            $this->dataNascimento = $dataNascimento;
        }

        public function getAltura() {
            return $this->altura;
        }
        public function setAltura($altura) {
            $this->altura = $altura;
        }
    }