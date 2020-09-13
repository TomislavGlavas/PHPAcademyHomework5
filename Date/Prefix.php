<?php

namespace Date;

class Prefix
{
   private $date; 

   public function __construct()
   {
       $this->date = date("d.m.Y");
   }

   public function __get($name)
    {   
        return $this->$name ?? null;
    }

    public function viewAction()
    {
        echo __CLASS__;
    }
}