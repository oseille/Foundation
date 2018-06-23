<?php
// 'Exception'=> 0:none, 1:PHPUnit_Framework_Error_Warning, 2:PHPUnit_Framework_Error_Notice, 3:\Exception
$this->_aTests[self::KEY_RESULT] = array(
//array( 'label'=>'TEST: integer 0'                       , 'test'=>'0'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '0' ),
                       '__toString' => array( 'exception'=>0, 'return' => '0' ),
                        'getLength' => array( 'exception'=>0, 'return' => 1 ),
                        'getBasename' => array( 'exception'=>0, 'return' => '0' ),
                        'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: decimal number 1234'             , 'test'=>'1234'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '1234' ),
                       '__toString' => array( 'exception'=>0, 'return' => '1234' ),
                        'getLength' => array( 'exception'=>0, 'return' => 4 ),
                        'getBasename' => array( 'exception'=>0, 'return' => '1234' ),
                        'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: negative integer -123'           , 'test'=>'-123'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '-123' ),
                       '__toString' => array( 'exception'=>0, 'return' => '-123' ),
                        'getLength' => array( 'exception'=>0, 'return' => 4 ),
                        'getBasename' => array( 'exception'=>0, 'return' => '-123' ),
                        'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: octal number 0123 (83)'          , 'test'=>'0123'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '0123' ),
                       '__toString' => array( 'exception'=>0, 'return' => '0123' ),
                        'getLength' => array( 'exception'=>0, 'return' => 4 ),
                      'getBasename' => array( 'exception'=>0, 'return' => '0123' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                       )),
//array( 'label'=>'TEST: hexadecimal number 0x1A (26)'    , 'test'=>'0x1A'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '0x1A' ),
                       '__toString' => array( 'exception'=>0, 'return' => '0x1A' ),
                        'getLength' => array( 'exception'=>0, 'return' => 4 ),
                      'getBasename' => array( 'exception'=>0, 'return' => '0x1A' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: float 0.0'                       , 'test'=>'0.0'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '0.0' ),
                       '__toString' => array( 'exception'=>0, 'return' => '0.0' ),
                        'getLength' => array( 'exception'=>0, 'return' => 3 ),
                      'getBasename' => array( 'exception'=>0, 'return' => '0.0' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: float 3.5714285714286'           , 'test'=>'3.5714285714286'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '3.5714285714286' ),
                       '__toString' => array( 'exception'=>0, 'return' => '3.5714285714286' ),
                        'getLength' => array( 'exception'=>0, 'return' => 15 ),
                      'getBasename' => array( 'exception'=>0, 'return' => '3.5714285714286' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: double 1.1258999068426E+15'      , 'test'=>'1125899906842624'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '1125899906842624' ),
                       '__toString' => array( 'exception'=>0, 'return' => '1125899906842624' ),
                        'getLength' => array( 'exception'=>0, 'return' => 16 ),
                      'getBasename' => array( 'exception'=>0, 'return' => '1125899906842624' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: real 7E-10'                      , 'test'=>'7E-10'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '7E-10' ),
                       '__toString' => array( 'exception'=>0, 'return' => '7E-10' ),
                        'getLength' => array( 'exception'=>0, 'return' => 5 ),
                      'getBasename' => array( 'exception'=>0, 'return' => '7E-10' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: range 2147483647'                , 'test'=>'2147483647'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '2147483647' ),
                       '__toString' => array( 'exception'=>0, 'return' => '2147483647' ),
                        'getLength' => array( 'exception'=>0, 'return' => 10 ),
                      'getBasename' => array( 'exception'=>0, 'return' => '2147483647' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: range -2147483648'               , 'test'=>'-2147483648'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '-2147483648' ),
                       '__toString' => array( 'exception'=>0, 'return' => '-2147483648' ),
                        'getLength' => array( 'exception'=>0, 'return' => 11 ),
                      'getBasename' => array( 'exception'=>0, 'return' => '-2147483648' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: range 2147483648'                , 'test'=>'2147483648' ),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '2147483648' ),
                       '__toString' => array( 'exception'=>0, 'return' => '2147483648' ),
                        'getLength' => array( 'exception'=>0, 'return' => 10 ),
                      'getBasename' => array( 'exception'=>0, 'return' => '2147483648' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: range -2147483649'               , 'test'=>'-2147483649' ),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '-2147483649' ),
                       '__toString' => array( 'exception'=>0, 'return' => '-2147483649' ),
                        'getLength' => array( 'exception'=>0, 'return' => 11 ),
                      'getBasename' => array( 'exception'=>0, 'return' => '-2147483649' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: range 9223372036854775807'       , 'test'=>'9223372036854775807' ),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '9223372036854775807' ),
                       '__toString' => array( 'exception'=>0, 'return' => '9223372036854775807' ),
                        'getLength' => array( 'exception'=>0, 'return' => 19 ),
                      'getBasename' => array( 'exception'=>0, 'return' => '9223372036854775807' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: range -9223372036854775808'      , 'test'=>'-9223372036854775808' ),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '-9223372036854775808' ),
                       '__toString' => array( 'exception'=>0, 'return' => '-9223372036854775808' ),
                        'getLength' => array( 'exception'=>0, 'return' => 20 ),
                      'getBasename' => array( 'exception'=>0, 'return' => '-9223372036854775808' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: range 9223372036854775808'       , 'test'=>'9223372036854775808' ),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '9223372036854775808' ),
                       '__toString' => array( 'exception'=>0, 'return' => '9223372036854775808' ),
                        'getLength' => array( 'exception'=>0, 'return' => 19 ),
                      'getBasename' => array( 'exception'=>0, 'return' => '9223372036854775808' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: range -9223372036854775809'      , 'test'=>'-9223372036854775809' ),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '-9223372036854775809' ),
                       '__toString' => array( 'exception'=>0, 'return' => '-9223372036854775809' ),
                        'getLength' => array( 'exception'=>0, 'return' => 20 ),
                      'getBasename' => array( 'exception'=>0, 'return' => '-9223372036854775809' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: 128M'                             , 'test'=>'128M'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => '128M' ),
                       '__toString' => array( 'exception'=>0, 'return' => '128M' ),
                        'getLength' => array( 'exception'=>0, 'return' => 4 ),
                      'getBasename' => array( 'exception'=>0, 'return' => '128M' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: 0x20'                             , 'test'=>chr(0x20)),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => FALSE ),
                         'getValue' => array( 'exception'=>0, 'return' => NULL ),
                       '__toString' => array( 'exception'=>0, 'return' => '' ),
                        'getLength' => array( 'exception'=>0, 'return' => 0 ),
                      'getBasename' => array( 'exception'=>0, 'return' => NULL ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: string empty'                     , 'test'=>''),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => FALSE ),
                         'getValue' => array( 'exception'=>0, 'return' => NULL ),
                       '__toString' => array( 'exception'=>0, 'return' => '' ),
                        'getLength' => array( 'exception'=>0, 'return' => 0 ),
                      'getBasename' => array( 'exception'=>0, 'return' => NULL ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: string empty with space'          , 'test'=>' '),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => FALSE ),
                         'getValue' => array( 'exception'=>0, 'return' => NULL ),
                       '__toString' => array( 'exception'=>0, 'return' => '' ),
                        'getLength' => array( 'exception'=>0, 'return' => 0 ),
                      'getBasename' => array( 'exception'=>0, 'return' => NULL ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: string "This is a simple string"' , 'test'=>'This is a simple string'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => FALSE ),
                         'getValue' => array( 'exception'=>0, 'return' => NULL ),
                       '__toString' => array( 'exception'=>0, 'return' => '' ),
                        'getLength' => array( 'exception'=>0, 'return' => 0 ),
                      'getBasename' => array( 'exception'=>0, 'return' => NULL ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: Iñtërnâtiônàlizætiøn'             , 'test'=>'Iñtërnâtiônàlizætiøn'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => 'Iñtërnâtiônàlizætiøn' ),
                       '__toString' => array( 'exception'=>0, 'return' => 'Iñtërnâtiônàlizætiøn' ),
                        'getLength' => array( 'exception'=>0, 'return' => 20 ),
                      'getBasename' => array( 'exception'=>0, 'return' => 'Iñtërnâtiônàlizætiøn' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: mail user+mailbox/department=shipping@café.glacé.com' , 'test'=>'user+mailbox/department=shipping@café.glacé.com'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => FALSE ),
                         'getValue' => array( 'exception'=>0, 'return' => NULL ),
                       '__toString' => array( 'exception'=>0, 'return' => '' ),
                        'getLength' => array( 'exception'=>0, 'return' => 0 ),
                      'getBasename' => array( 'exception'=>0, 'return' => NULL ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
//array( 'label'=>'TEST: hostname domain.com'              , 'test'=>'domain.com'),
array( 'expected'=>array(  'exception' => 0,
                           'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                         'getValue' => array( 'exception'=>0, 'return' => 'domain.com' ),
                       '__toString' => array( 'exception'=>0, 'return' => 'domain.com' ),
                        'getLength' => array( 'exception'=>0, 'return' => 10 ),
                      'getBasename' => array( 'exception'=>0, 'return' => 'domain.com' ),
                      'getRealPath' => array( 'exception'=>0, 'return' => FALSE ),
                        )),
);