<?php

namespace Classes;
use interfaces\EndCobrancaInteface;

/**
 * Classe de Cliente Pessoa Física
 *
 * @Jadiel Cordeiro Filho
 */
class TipoDeCliente extends Clientes implements EndCobrancaInteface {
    
    protected $celular;
    protected $telContato;
    protected $endCobranca;
    
    public function getCelular() {
        $this->celular = $celular;
        return $this;
    }
    
    public function setCelular($celular) {
       $this->celular = $celular;
       return $this->celuar;
    }

  public function getTelContato(){
      if($this->telContato == null){
          return $this->getCelular();
      }else{
          return $this->telContato;
      }
  }
  
  public function setTelContato($telContato){
      $this->telContato = $telContato;
      return $this;
  }
  
  public function setEndCobranca($endCobranca){
      $this->endCobranca = $endCobranca;
      return $this->endCobranca;
  }
  
  public function getEndCobranca(){
      if($this->endCobranca == null){
          return$this->endCobranca();
      }  else {
          return $this->endCobranca;    
      }
  }

   
}

