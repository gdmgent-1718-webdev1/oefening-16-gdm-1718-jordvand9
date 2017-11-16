<?php

namespace Kunstwerken;

class Boek extends KunstwerkAbstract implements IWoorden
{
    public $aantalBladzijden;
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
