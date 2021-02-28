<?php

// Индексный файл для тестирования и разработки на локальном хосте

// Подключаю классы животных и хлева
$serverRoot = $_SERVER['DOCUMENT_ROOT'];
require ($serverRoot . '/classes/Cow.php');
require ($serverRoot . '/classes/Hen.php');
require ($serverRoot . '/classes/Barn.php');

// Создаю новый хлев
$bobsBarn = new Barn;

echo '<pre>';

// Добавляю животных
$bobsBarn->addAnimals('Cow', 7);
$bobsBarn->addAnimals('Hen', 10);

// Собираю продукцию
$bobsBarn->getProducts();

// Общий отчёт по добыче
$bobsBarn->report();
echo '</pre>';
