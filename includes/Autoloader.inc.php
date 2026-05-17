<?php

spl_autoload_register('classAutoloader');

function classAutoloader(string $className): void
{
    $fileExtensions = [
        '.class.php',
        '.contr.php',
        '.model.php'
    ];

    foreach ($fileExtensions as $extension) {
        $filePath = __DIR__ . '/../classes/' . $className . $extension;

        if (file_exists($filePath)) {
            include_once $filePath;
            return;
        }
    }
}
