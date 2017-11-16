<?php

namespace Kunstwerken;

class Schilderij extends KunstwerkAbstract implements IAfbeelding
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
