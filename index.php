<?php

// Индексный файл для тестирования и разработки

require ($_SERVER['DOCUMENT_ROOT'] . '/classes/Cow.php');
require ($_SERVER['DOCUMENT_ROOT'] . '/classes/Hen.php');
require ($_SERVER['DOCUMENT_ROOT'] . '/classes/Barn.php');

$bariga = new Barn;

$bariga->addAnimals('Cow', 7) . '<br>';
$bariga->addAnimals('Hen', 10) . '<br>';

$bariga->getProducts();
$bariga->report();
