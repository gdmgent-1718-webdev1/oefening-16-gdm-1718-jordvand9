<?php

namespace Kunstwerken;

class Dans extends KunstwerkAbstract implements IAfBeelding
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
