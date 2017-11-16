<?php

namespace Kunstwerken;

class Lied extends KunstwerkAbstract implements IDuur
{
    public $duur;
    public function getDuur(): ?int
    {
        return $this-> duur;
    }
    public function setDuur(int $duur): ?int
    {
        $this->duur = $duur;
    }
}
