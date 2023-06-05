<?php error_reporting(-1);

define("CONST_1", "Value 1");

echo CONST_1;

const CONST_2 = "Value 2";

var_dump(CONST_2);


const NAME = "John";

echo "Hello, {NAME}";

// var_dump(get_defined_constants(true));
?>