<?php

namespace Kunstwerken;

class Vaas extends KunstwerkAbstract implements IAfbeelding, IGewicht
{
    public $uri;
    public $gewicht;
    public function getAfbeelding(): ?string 
    {
        return $this -> uri;
    }
    public function setAfbeelding(string $uri): ?string 
    {
        $this->uri = $uri;
    }
    public function getGewicht(): ?int
    {
        return $this-> gewicht;
    }
    public function setGewicht(int $gewicht): ?int
    {
        $this->gewicht = $gewicht;
    }
}
