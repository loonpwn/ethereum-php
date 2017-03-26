<?php

namespace Ethereum;

/**
 * Implement data type EstimateTransaction.
 */
class EstimateTransaction extends EthDataType {

  protected $from;
  protected $to;
  protected $gas;
  protected $gasPrice;
  protected $value;
  protected $data;
  protected $nonce;

  /**
   * Constructor.
   */
  public function __construct(EthD20 $from = NULL, EthD20 $to = NULL, EthQ $gas = NULL, EthQ $gasPrice = NULL, EthQ $value = NULL, EthD $data = NULL, EthQ $nonce = NULL) {
    $this->from = $from;  
    $this->to = $to;  
    $this->gas = $gas;  
    $this->gasPrice = $gasPrice;  
    $this->value = $value;  
    $this->data = $data;  
    $this->nonce = $nonce; 
  }

  public function setFrom(EthD20 $value){
    $this->from = $value;
  }

  public function setTo(EthD20 $value){
    $this->to = $value;
  }

  public function setGas(EthQ $value){
    $this->gas = $value;
  }

  public function setGasPrice(EthQ $value){
    $this->gasPrice = $value;
  }

  public function setValue(EthQ $value){
    $this->value = $value;
  }

  public function setData(EthD $value){
    $this->data = $value;
  }

  public function setNonce(EthQ $value){
    $this->nonce = $value;
  }



  public function getType() {
    return 'EstimateTransaction';
  }

  public function toArray() {
    $return = array();
      (!is_null($this->from)) ? $return['from'] = $this->from->hexVal() : NULL; 
      (!is_null($this->to)) ? $return['to'] = $this->to->hexVal() : NULL; 
      (!is_null($this->gas)) ? $return['gas'] = $this->gas->hexVal() : NULL; 
      (!is_null($this->gasPrice)) ? $return['gasPrice'] = $this->gasPrice->hexVal() : NULL; 
      (!is_null($this->value)) ? $return['value'] = $this->value->hexVal() : NULL; 
      (!is_null($this->data)) ? $return['data'] = $this->data->hexVal() : NULL; 
      (!is_null($this->nonce)) ? $return['nonce'] = $this->nonce->hexVal() : NULL; 
    return $return;
  }
 /**
  * Returns a name => type array.
  */
  public static function getTypeArray() {
    return array( 
      'from' => 'EthD20',
      'to' => 'EthD20',
      'gas' => 'EthQ',
      'gasPrice' => 'EthQ',
      'value' => 'EthQ',
      'data' => 'EthD',
      'nonce' => 'EthQ',
    );
  }
}