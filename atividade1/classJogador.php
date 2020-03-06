<?php
class Jogador{
    //lista de atributos
    private $nome;
    private $simbolo;


    public function __construct($n, $s){
        $this->nome = $n;
        $this->simbolo = $s;
    }

    public function get_nome(){
        return($this->nome);
    }
    public function get_simbolo(){
        return($this->simbolo);
    }

    //lista de metodos
    public function jogar($valor_aceleracao){
        $this->velocidade_atual = 
        $this->velocidade_atual + $valor_aceleracao*$tempo; 

        if($this->velocidade_atual > $this->velocidade_maxima){
            $this->velocidade_atual = $this->velocidade_maxima;
        }
    }
}
?>