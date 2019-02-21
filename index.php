<?php
class CarrinhoDao {
  private $carrinhoDao = Array();

  public function __construct() {

  }

  public function insereProduto($_produto) {
 $carrinhoDao[] = $_produto;

    print "<pre>";
    print_r($carrinhoDao[]);
    print "</pre>"; 
  }

  public function getCarrinho () {
 return $this->carrinhoDao;
  }
}
?>