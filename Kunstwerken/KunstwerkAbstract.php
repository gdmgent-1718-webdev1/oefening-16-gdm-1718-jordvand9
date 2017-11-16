<?php

namespace Kunstwerken;

abstract class KunstwerkAbstract {
    public $kunstenaar;
    public $titel;

    function __construct()
    {
        $this->date = new \DateTime();
    }
}