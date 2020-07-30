<?php

$ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];


echo"<h2>Ingredientes sem chave</h2>" ;
//uma formatação pegando somente o item
foreach ($ingredientes as $valor) {
    echo "item: ".$valor."<br/>";
}


echo"<h2>Ingredientes com chave</h2>" ;
// formatação pegando também a chave
foreach ($ingredientes as $chave => $valor) {
    echo ($chave + 1).": ".$valor."<br/>";
}

echo"<h2>Ingredientes lista UL LI</h2>" ;
//lista ul li html 
echo "<ul>";
foreach ($ingredientes as $valor) {
    echo "<li>".$valor."</li>";
}
echo "<ul>";