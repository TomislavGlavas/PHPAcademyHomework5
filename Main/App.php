<?php

namespace Main;


final class App
{
    public function viewAction()
    {
        echo __CLASS__;
    }

    public function echoClass($name)
    {
        $c = new $name();
        $c->viewAction();
    }
}

