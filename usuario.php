<?php
    class Usuario{
        public $nome;
        public $cpf;
        public $endereco;

        //construtor da classe
        function Usuario(){
            $this->preparaUsuario();
        }

        
        function preparaUsuario(){
            $this->nome="Ari";
            $this->cpf="0123456";
            $this->endereco="Rua São João";

        }

    }
?>