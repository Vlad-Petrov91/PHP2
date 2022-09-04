<?php

function explorer(string $path, string $separator): void
{
    $direcroryIterator = new DirectoryIterator($path);
    foreach ($direcroryIterator as $item) {
        if (!$item->isDot() && $item->isDir()) {
            echo $separator . $item . "<br>";
            $path = $item->getPathname();
            $separator .= '-';
            explorer($path, $separator);
        }
    }
}

explorer(".\\1", '-');
