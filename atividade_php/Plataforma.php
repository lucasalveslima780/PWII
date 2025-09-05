<?php
    Class Plataforma{
        public $nome_Plataforma;
        public $fabricante;
        public $tipo_Plataforma;
        public $suporte_Online;
        public $ano_Lancamento;

        public function __construct($nome_Plataforma, $fabricante, $tipo_Plataforma, $suporte_Online, $ano_Lancamento){
            $this->nome_Plataforma = $nome_Plataforma;
            $this->fabricante = $fabricante;
            $this->tipo_Plataforma = $tipo_Plataforma;
            $this->suporte_Online = $suporte_Online;
            $this->ano_Lancamento = $ano_Lancamento;
        }

        public function exibirInformacoes(){
            return "Nome da Plataforma: $this->nome_Plataforma \n Fabricante: $this->fabricante \n Tipo da Plataforma: $this->tipo_Plataforma \n Preço: $this->suporte_Online \n Faixa Etária: $this->ano_Lancamento";
        }
    }

?>