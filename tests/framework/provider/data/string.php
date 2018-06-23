<?php
return [
    [ 'label' => 'TEST: integer 0', 'test'  => '0' ],
    [ 'label' => 'TEST: decimal number 1234', 'test'  => '1234' ],
    [ 'label' => 'TEST: negative integer -123', 'test'  => '-123' ],
    [ 'label' => 'TEST: octal number 0123 (83)', 'test'  => '0123' ],
    [ 'label' => 'TEST: hexadecimal number 0x1A (26)', 'test'  => '0x1A' ],
    [ 'label' => 'TEST: float 0.0', 'test'  => '0.0' ],
    [ 'label' => 'TEST: float 3.5714285714286', 'test'  => '3.5714285714286' ],
    [ 'label' => 'TEST: double 1.1258999068426E+15', 'test'  => '1125899906842624' ],
    [ 'label' => 'TEST: real 7E-10', 'test'  => '7E-10' ],
    [ 'label' => 'TEST: range 2147483647', 'test'  => '2147483647' ],
    [ 'label' => 'TEST: range -2147483648', 'test'  => '-2147483648' ],
    [ 'label' => 'TEST: range 2147483648', 'test'  => '2147483648' ],
    [ 'label' => 'TEST: range -2147483649', 'test'  => '-2147483649' ],
    [ 'label' => 'TEST: range 9223372036854775807', 'test'  => '9223372036854775807' ],
    [ 'label' => 'TEST: range -9223372036854775808', 'test'  => '-9223372036854775808' ],
    [ 'label' => 'TEST: range 9223372036854775808', 'test'  => '9223372036854775808' ],
    [ 'label' => 'TEST: range -9223372036854775809', 'test'  => '-9223372036854775809' ],
    [ 'label' => 'TEST: 128M', 'test'  => '128M' ],
    [ 'label' => 'TEST: 0x20', 'test'  => chr( 0x20 ) ],
    [ 'label' => 'TEST: string empty', 'test'  => '' ],
    [ 'label' => 'TEST: string empty with space', 'test'  => ' ' ],
    [ 'label' => 'TEST: string "This is a simple string"', 'test'  => 'This is a simple string' ],
    [ 'label' => 'TEST: Iñtërnâtiônàlizætiøn', 'test'  => 'Iñtërnâtiônàlizætiøn' ],
    [ 'label' => 'TEST: mail user+mailbox/department=shipping@café.glacé.com', 'test'  => 'user+mailbox/department=shipping@café.glacé.com' ],
    [ 'label' => 'TEST: hostname domain.com', 'test'  => 'domain.com' ],
];