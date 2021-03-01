<?php

// Файл для запуска работы системы из консоли

// Подключаю классы животных и хлева
require (__DIR__ . '/classes/Cow.php');
require (__DIR__ . '/classes/Hen.php');
require (__DIR__ . '/classes/Barn.php');

// Создаю новый хлев
$bobsBarn = new Barn;

// Добавляю животных
$bobsBarn->addAnimals('Cow', 10);
$bobsBarn->addAnimals('Hen', 20);

// Собираю продукцию
$bobsBarn->getProducts();

// Общий отчёт по добыче
$bobsBarn->report();