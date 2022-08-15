<?php

namespace app\engine;

class Autoload
{

    public function loadClass($className)
    {
        $replacedValues = ["app\\", "\\"];
        $values = [ROOT . DS, DS];
        $fileName = str_replace($replacedValues, $values, $className) . ".php";
        if (file_exists($fileName)) {
            include $fileName;
        }
    }
}
