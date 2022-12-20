<?php

trait News
{
   public $shop;
   public $vendite;

   public function getShop()
   {
      return "this->shop - this->vendite";
   }
}