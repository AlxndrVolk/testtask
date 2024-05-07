<?php
/**
 * Путь к директории
 */
$dir = '/hawking';

/**
 * Список файлов в директории
 */
$files = scandir($dir);

/**
 * Регулярное выражение для фильтрации
 * с соответствием с заданием
 * (только цифры и латинские буквы)
 */
$regular = '/^[a-zA-Z0-9]+\.bros$/';

/**
 * Фильтруем список
 */
$filteredFiles = array_filter($files, function($file) use ($regular) {
    return preg_match($regular, $file);
});

/**
 * Вывод на экран
 */
foreach ($filteredFiles as $file) {
    echo $file . PHP_EOL;
}
