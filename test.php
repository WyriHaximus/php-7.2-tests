<?php

require 'vendor/autoload.php';

/**
 * Doc block yo!
 */
class A
{
}

$a = new A();

var_export(get_class($a));
var_export(get_class(null));
