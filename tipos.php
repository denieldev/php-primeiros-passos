<?php
ini_set(varname: 'precision', newvalue:17);

$a = new \Decimal\Decimal(value: '0.1');
$b = new \Decimal\Decimal(value: '0.2');
var_dump(expression: $a + $b);

