<?php

require_once("modelo/Atleta.php");
require_once("modelo/Pais.php");

$pais1 = new Pais();
$pais1->setNome("Brasil");
$pais1->setContinente("America");

$pais2 = new Pais();
$pais2->setNome("Argentina");
$pais2->setContinente("America");

$atleta1 = new Atleta();
$atleta1->setNome("Gabriel Guilhen");
$atleta1->setIdade("16");
$atleta1->setEsporte("Judô");
$atleta1->setPais($pais1);

$atleta2 = new Atleta();
$atleta2->setNome("Gustavo Dobner");
$atleta2->setIdade("16");
$atleta2->setEsporte("Judô");
$atleta2->setPais($pais1);

$atleta3 = new Atleta();
$atleta3->setNome("Messi");
$atleta3->setIdade("80");
$atleta3->setEsporte("Futebol");
$atleta3->setPais($pais2);

$atleta4 = new Atleta();
$atleta4->setNome("Maradona");
$atleta4->setIdade("100");
$atleta4->setEsporte("Futebol");
$atleta4->setPais($pais2);



$atleta = array($atleta1, $atleta2, $atleta3, $atleta4);

foreach ($atleta as $a) {
    print("\n " . $a->getNome() . " é atleta do ". $a->getPais()->getNome(). " - " . $a->getPais()->getContinente(). ", possui ".$a->getIdade(). " anos e atua no esporte ". $a->getEsporte(). ".\n");
}
