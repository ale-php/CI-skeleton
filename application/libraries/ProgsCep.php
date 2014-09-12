<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 8/14/14
 * Time: 11:07 AM
 */

class ProgsCep {


    private $rua;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;

    public function buscar(){
        if(isset($this->cep)){
            $resultado = @file_get_contents('http://republicavirtual.com.br/web_cep.php?cep='.urlencode($cep).'&formato=query_string');
            if($resultado){
                parse_str($resultado, $retorno);
                $this->rua    = $retorno['logradouro'] ;
                $this->bairro = $retorno['bairro'] ;
                $this->cidade = $retorno['cidade'] ;
                $this->uf     = $retorno['uf'] ;

                return $retorno;
            }else{
                throw new Exception("Sem Conexao com a internet");
            }}else{
            throw new Exception("Cep Em branco");
        }
    }


    public function setCep($cep){
        $this->cep = $cep;
    }
    public function  getCep(){
        return $this->cep;
    }
    public function getRua(){
        return $this->rua;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getUf(){
        return $this->uf;
    }

} 