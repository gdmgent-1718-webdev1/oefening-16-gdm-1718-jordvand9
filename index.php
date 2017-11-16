<?php


spl_autoload_register(function ($name) {
    $path = "${name}.php";
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $path);
});

$kunstwerk1 = new Kunstwerken\Film();
$kunstwerk1->duur = 30;
$kunstwerk2 = new Kunstwerken\Foto();
$kunstwerk3 = new Kunstwerken\Vaas();
$kunstwerk4 = new Kunstwerken\Beeldhouwerk();
$kunstwerk5 = new Kunstwerken\Boek();
$kunstwerk5->titel = "T";
$kunstwerk5->woorden = 25;
//$kunstwerk4['afbeelding'] = "3";

echo var_dump($kunstwerk1);
echo var_dump($kunstwerk4);
echo var_dump($kunstwerk5);