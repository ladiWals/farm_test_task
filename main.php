<?php

// Файл для запуска работы системы из консоли

// Автоподгрузка классов
spl_autoload_register(function($class)
{

	// Получаю полное имя файла
	$file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

	// Если такой файл существует, то подключаю его
	if(file_exists($file)) {
		require_once($file);
	}
});

// Создаю новый хлев
$bobsBarn = new Farm\Barn;

// Добавляю животных
$bobsBarn->addAnimals('Farm\\Cow', 10);
$bobsBarn->addAnimals('Farm\\Hen', 20);$bobsBarn->addAnimals('Farm\\Hen', "adc");

// Собираю продукцию
$bobsBarn->getProducts();

// Общий отчёт по добыче
$bobsBarn->report();