<?php

namespace Musician;

require_once 'Date/Prefix.php';

class Person
{   

    public function viewAction()
    {      
            echo  __CLASS__;  
    }

    public static $p = new \Date\Prefix();
    public $t= $p->date;



   
}