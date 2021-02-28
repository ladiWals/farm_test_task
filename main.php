<?php

// Файл для запуска работы системы из консоли

// Подключаю классы животных и хлева
$serverRoot = __DIR__;
require ($serverRoot . '/classes/Cow.php');
require ($serverRoot . '/classes/Hen.php');
require ($serverRoot . '/classes/Barn.php');

// Создаю новый хлев
$bobsBarn = new Barn;

// Добавляю животных
$bobsBarn->addAnimals('Cow', 10);
$bobsBarn->addAnimals('Hen', 20);

// Собираю продукцию
$bobsBarn->getProducts();

// Общий отчёт по добыче
$bobsBarn->report();