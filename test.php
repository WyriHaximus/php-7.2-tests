<?php

require 'vendor/autoload.php';

/**
 * Doc block yo!
 */
class A
{
}

$a = new A();

var_export((new ReflectionClass($a))->getDocComment());
