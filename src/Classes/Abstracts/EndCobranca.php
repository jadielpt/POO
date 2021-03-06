<?php

namespace Classes\Abstracts;
use Classes\interfaces\EndCobrancaInteface;

/**
 * Classe de Cliente Pessoa Física
 *
 * @Jadiel Cordeiro Filho
 */
abstract class EndCobranca implements EndCobrancaInteface {
    
    
    protected $telContato;
    protected $endCobranca;
    
    
        
   public function getTelContato(){
     return $this->telContato;
  }
  
  public function setTelContato($telContato){
      $this->telContato = $telContato;
      return $this->telContato;
  }
  
  public function getEndCobranca() {
      return $this->endCobranca;
  }
  
  public function setEndCobranca($endCobranca){
      $this->endCobranca = $endCobranca;
      return $this->endCobranca;
  }
  
  
  }

