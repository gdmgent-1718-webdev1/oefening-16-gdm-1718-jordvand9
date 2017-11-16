<?php

namespace Kunstwerken;

class Foto extends KunstwerkAbstract implements IAfbeelding
{
    public $uri;
    public function getAfbeelding(): ?string 
    {
        return $this -> uri;
    }
    public function setAfbeelding(string $uri): ?string 
    {
        $this->uri = $uri;
    }
}
