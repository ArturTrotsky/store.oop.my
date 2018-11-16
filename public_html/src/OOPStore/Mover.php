<?php

namespace OOPStore;

class Mover implements MoverInterface
{
  private $cart;
  private $store;

  public function __construct(Cart $cart, Store $store)
  {
    $this->cart = $cart;
    $this->store = $store;
  }
  
  public function getCart()
  {
      return $this->cart;
  }

  public function getStore()
  {
      return $this->store;
  }



  public function moveProductFromStoreToCart(Product $product)
  {
    $this->getStore()->removeProduct($product);


    $this->getCart()->addProduct($product);
  }

}