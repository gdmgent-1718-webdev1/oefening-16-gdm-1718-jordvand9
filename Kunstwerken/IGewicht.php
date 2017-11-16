<?php

namespace Kunstwerken;

interface IGewicht
{
    public function getGewicht(): ?int;
    public function setGewicht(int $uri);
}