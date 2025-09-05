<?php
    Class Jogos{
        public $nome; 
        public $genero;
        public $multijogador;
        public $preco;
        public $faixa_Etaria;
    
        public function __construct($nome, $genero, $multijogador, $preco, $faixa_Etaria){
            $this->nome = $nome;
            $this->genero = $genero;
            $this->multijogador = $multijogador;
            $this->preco = $preco;
            $this->faixa_Etaria = $faixa_Etaria;
        }

        public function exibirInformacoes(){
            return "Nome: $this->nome \n Genero: $this->genero \n Multijogador: $this->multijogador \n Preço: $this->preco \n Faixa Etária: $this->faixa_Etaria";
        }
    }

?>