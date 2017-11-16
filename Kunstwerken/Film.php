<?php

namespace Kunstwerken;

class Film extends KunstwerkAbstract implements IAfbeelding, IDuur
{
    public $uri;
    public $duur;
    public function getAfbeelding(): ?string 
    {
        return $this -> uri;
    }
    public function setAfbeelding(string $uri): ?string 
    {
        $this->uri = $uri;
    }
    public function getDuur(): ?int
    {
        return $this-> duur;
    }
    public function setDuur(int $duur): ?int
    {
        $this->duur = $duur;
    }
}
