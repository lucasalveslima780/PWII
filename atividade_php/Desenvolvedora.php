<?php
    Class Desenvolvedora{
        public $nome_Estudio;
        public $pais_Origem;
        public $ano_Fundacao;
        public $engine_Utilizada;

        public function __construct($nome_Estudio, $pais_Origem, $ano_Fundacao, $engine_Utilizada){
            $this->nome = $nome_Estudio;
            $this->pais = $pais_Origem;
            $this->funcacao = $ano_Fundacao;
            $this->engine = $engine_Utilizada;
        }

        public function exibirInformacoes(){
            return "Nome do estudio: $this->nome \n Pais de origem: $this->pais \n Ano de fundação: $this->funcacao \n Engine Utilizada: $this->engine";
        }
    }
?>