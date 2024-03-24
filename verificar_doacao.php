<?php

$idade =19;
$peso = 72;
$nome = 'mario';

if(($idade >= 16 && $idade<= 65) && $peso >= 50){
    echo "oi $nome , voce atende aos requisitos";
}else{
    echo "oi $nome , voce nao atende aos requisitos ficamos triste com a noticia ";
}
?>