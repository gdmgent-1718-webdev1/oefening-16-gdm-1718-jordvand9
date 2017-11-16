<?php

namespace Kunstwerken;

class Gedicht extends KunstwerkAbstract implements IWoorden
{
    public $woorden;
    public function getWoorden(): ?int
    {
        return $this-> woorden;
    }
    public function setWoorden(int $woorden): ?int
    {
        $this->woorden = $woorden;
    }
}
