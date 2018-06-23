<?php
// 'Exception'=> 0:none, 1:PHPUnit_Framework_Error_Warning, 2:PHPUnit_Framework_Error_Notice, 3:\Exception
return [
//[ 'label'=>'TEST: integer 0'                       , 'test'=>0],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '0' ],
            '__toString' => [ 'exception' => 0, 'return'    => '0' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 1 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '0' ],
        ] ],
//[ 'label'=>'TEST: decimal number 1234'             , 'test'=>1234],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '1234' ],
            '__toString' => [ 'exception' => 0, 'return'    => '1234' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 4 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '1234' ],
        ] ],
//[ 'label'=>'TEST: negative integer -123'           , 'test'=>-123],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '-123' ],
            '__toString' => [ 'exception' => 0, 'return'    => '-123' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 4 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '-123' ],
        ] ],
//[ 'label'=>'TEST: octal number 0123 (83)'          , 'test'=>0123],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '83' ],
            '__toString' => [ 'exception' => 0, 'return'    => '83' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 2 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '83' ],
        ] ],
//[ 'label'=>'TEST: hexadecimal number 0x1A (26)'    , 'test'=>0x1A],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '26' ],
            '__toString' => [ 'exception' => 0, 'return'    => '26' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 2 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '26' ],
        ] ],
//[ 'label'=>'TEST: float 0.0'                       , 'test'=>0.0],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '0' ],
            '__toString' => [ 'exception' => 0, 'return'    => '0' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 1 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '0' ],
        ] ],
//[ 'label'=>'TEST: float 3.5714285714286'           , 'test'=>25/7],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '3.5714285714286' ],
            '__toString' => [ 'exception' => 0, 'return'    => '3.5714285714286' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 15 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '3.5714285714286' ],
        ] ],
//[ 'label'=>'TEST: double 1.1258999068426E+15'      , 'test'=>pow(2,50)],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '1.1258999068426E+15' ],
            '__toString' => [ 'exception' => 0, 'return'    => '1.1258999068426E+15' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 19 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '1.1258999068426E+15' ],
        ] ],
//[ 'label'=>'TEST: real 7E-10'                      , 'test'=>7E-10],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '7.0E-10' ],
            '__toString' => [ 'exception' => 0, 'return'    => '7.0E-10' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 7 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '7.0E-10' ],
        ] ],
//[ 'label'=>'TEST: range 2147483647'                , 'test'=>2147483647],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '2147483647' ],
            '__toString' => [ 'exception' => 0, 'return'    => '2147483647' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 10 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '2147483647' ],
        ] ],
//[ 'label'=>'TEST: range -2147483648'               , 'test'=>-2147483648],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '-2147483648' ],
            '__toString' => [ 'exception' => 0, 'return'    => '-2147483648' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 11 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '-2147483648' ],
        ] ],
//[ 'label'=>'TEST: range 2147483648'                , 'test'=>2147483648 ],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '2147483648' ],
            '__toString' => [ 'exception' => 0, 'return'    => '2147483648' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 10 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '2147483648' ],
        ] ],
//[ 'label'=>'TEST: range -2147483649'               , 'test'=>-2147483649 ],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '-2147483649' ],
            '__toString' => [ 'exception' => 0, 'return'    => '-2147483649' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 11 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '-2147483649' ],
        ] ],
//[ 'label'=>'TEST: range 9223372036854775807'       , 'test'=>9.2233720368548E+18 ],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '9.2233720368548E+18' ],
            '__toString' => [ 'exception' => 0, 'return'    => '9.2233720368548E+18' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 19 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '9.2233720368548E+18' ],
        ] ],
//[ 'label'=>'TEST: range -9223372036854775808'      , 'test'=>-9223372036854775808 ],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '-9.2233720368548E+18' ],
            '__toString' => [ 'exception' => 0, 'return'    => '-9.2233720368548E+18' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 20 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '-9.2233720368548E+18' ],
        ] ],
//[ 'label'=>'TEST: range 9223372036854775808'       , 'test'=>9223372036854775808 ],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '9.2233720368548E+18' ],
            '__toString' => [ 'exception' => 0, 'return'    => '9.2233720368548E+18' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 19 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '9.2233720368548E+18' ],
        ] ],
//[ 'label'=>'TEST: range -9223372036854775809'      , 'test'=>-9223372036854775809 ],
    [ 'expected' => [ 'exception'  => 0,
            'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '-9.2233720368548E+18' ],
            '__toString' => [ 'exception' => 0, 'return'    => '-9.2233720368548E+18' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 20 ],
            'getRaw'     => [ 'exception' => 0, 'return'    => '-9.2233720368548E+18' ],
        ] ],
];