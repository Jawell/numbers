<?php
spl_autoload_register ('autoload');
function autoload ($className)
{
    $fileName = strtolower($className) . '.php';
    $path = explode('_', $className);
    switch (strtolower($path[0]))
    {
        case 'controller':
            $folder = 'controller';
            break;
        case 'model':
            $folder = 'model';
            break;
    }
    $file = Paths::HOME . $folder . Paths::DS . $fileName;
    if(file_exists($file))
    {
        include ($file);
    }
}
