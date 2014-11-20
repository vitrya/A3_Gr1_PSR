<?php
require __DIR__.'/vendor/autoload.php';

$PassGenerator = new \Web1\StringGenerator\PasswordGenerator();

//$PassGenerator->charact();

echo \Web1\StringGenerator\PasswordGenerator::charact(50, \Web1\StringGenerator\PasswordGenerator::PASSWORD_HARD);
