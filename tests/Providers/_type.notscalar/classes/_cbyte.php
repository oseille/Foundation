<?php
// 'Exception'=> 0:none, 1:PHPUnit_Framework_Error_Warning, 2:PHPUnit_Framework_Error_Notice, 3:\Exception
$this->_aTests[self::KEY_RESULT] = array(
//array( 'label'=>'TEST: null'          , 'test'=>NULL),
array( 'expected'=>array( 'exception' => 0,
                            'isvalid' => array( 'exception'=>0, 'return' => FALSE ),
                           'getValue' => array( 'exception'=>0, 'return' => NULL ),
                         '__toString' => array( 'exception'=>0, 'return' => '' ),
                          'getLength' => array( 'exception'=>0, 'return' => 0 ),
                        )),
//array( 'label'=>'TEST: array'         , 'test'=>array('This','is')),
array( 'expected'=>array( 'exception' => 0,
                            'isvalid' => array( 'exception'=>0, 'return' => FALSE ),
                           'getValue' => array( 'exception'=>0, 'return' => NULL ),
                         '__toString' => array( 'exception'=>0, 'return' => '' ),
                          'getLength' => array( 'exception'=>0, 'return' => 0 ),
                        )),
//array( 'label'=>'TEST: array empty'   , 'test'=>array()),
array( 'expected'=>array( 'exception' => 0,
                            'isvalid' => array( 'exception'=>0, 'return' => FALSE ),
                           'getValue' => array( 'exception'=>0, 'return' => NULL ),
                         '__toString' => array( 'exception'=>0, 'return' => '' ),
                          'getLength' => array( 'exception'=>0, 'return' => 0 ),
                        )),
//array( 'label'=>'TEST: object'        , 'test'=>(object)array()),
array( 'expected'=>array( 'exception' => 0,
                            'isvalid' => array( 'exception'=>0, 'return' => FALSE ),
                           'getValue' => array( 'exception'=>0, 'return' => NULL ),
                         '__toString' => array( 'exception'=>0, 'return' => '' ),
                          'getLength' => array( 'exception'=>0, 'return' => 0 ),
                        )),
//array( 'label'=>'TEST: CFloat'        , 'test'=>new \Foundation\Type\Simple\CFloat(1.234) ),
array( 'expected'=>array( 'exception' => 0,
                            'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                           'getValue' => array( 'exception'=>0, 'return' => 1.234 ),
                         '__toString' => array( 'exception'=>0, 'return' => '1.234' ),
                          'getLength' => array( 'exception'=>0, 'return' => 5 ),
                        )),
//array( 'label'=>'TEST: CInt'          , 'test'=>new \Foundation\Type\Simple\CInt(123) ),
array( 'expected'=>array( 'exception' => 0,
                            'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                           'getValue' => array( 'exception'=>0, 'return' => 123 ),
                         '__toString' => array( 'exception'=>0, 'return' => '123' ),
                          'getLength' => array( 'exception'=>0, 'return' => 3 ),
                        )),
//array( 'label'=>'TEST: CByte'         , 'test'=>new \Foundation\Type\Complex\CByte('16M') ),
array( 'expected'=>array( 'exception' => 0,
                            'isvalid' => array( 'exception'=>0, 'return' => TRUE ),
                           'getValue' => array( 'exception'=>0, 'return' => '16M' ),
                         '__toString' => array( 'exception'=>0, 'return' => '16M' ),
                          'getLength' => array( 'exception'=>0, 'return' => 3 ),
                        )),
//array( 'label'=>'TEST: CString'       , 'test'=>new \Foundation\Type\Simple\CString('ceci est une chaîne') ),
array( 'expected'=>array( 'exception' => 0,
                            'isvalid' => array( 'exception'=>0, 'return' => FALSE ),
                           'getValue' => array( 'exception'=>0, 'return' => NULL ),
                         '__toString' => array( 'exception'=>0, 'return' => '' ),
                          'getLength' => array( 'exception'=>0, 'return' => 0 ),
                        )),
//array( 'label'=>'TEST: CPath'         , 'test'=>new \Foundation\Type\Complex\CPath('/var/tmp') ),
array( 'expected'=>array( 'exception' => 0,
                            'isvalid' => array( 'exception'=>0, 'return' => FALSE ),
                           'getValue' => array( 'exception'=>0, 'return' => NULL ),
                         '__toString' => array( 'exception'=>0, 'return' => '' ),
                          'getLength' => array( 'exception'=>0, 'return' => 0 ),
                        )),
//array( 'label'=>'TEST: CEmailAddress' , 'test'=>new \Foundation\Type\Complex\CEmailAddress('toto@café-frappé.com') ),
array( 'expected'=>array( 'exception' => 0,
                            'isvalid' => array( 'exception'=>0, 'return' => FALSE ),
                           'getValue' => array( 'exception'=>0, 'return' => NULL ),
                         '__toString' => array( 'exception'=>0, 'return' => '' ),
                          'getLength' => array( 'exception'=>0, 'return' => 0 ),
                        )),
//array( 'label'=>'TEST: CIp'           , 'test'=>new \Foundation\Type\Complex\CIp('192.168.33.1') ),
array( 'expected'=>array( 'exception' => 0,
                            'isvalid' => array( 'exception'=>0, 'return' => FALSE ),
                           'getValue' => array( 'exception'=>0, 'return' => NULL ),
                         '__toString' => array( 'exception'=>0, 'return' => '' ),
                          'getLength' => array( 'exception'=>0, 'return' => 0 ),
                        )),
//array( 'label'=>'TEST: resource'      , 'test'=>new \SplFileObject(__FILE__) ),
array( 'expected'=>array( 'exception' => 0,
                            'isvalid' => array( 'exception'=>0, 'return' => FALSE ),
                           'getValue' => array( 'exception'=>0, 'return' => NULL ),
                         '__toString' => array( 'exception'=>0, 'return' => '' ),
                          'getLength' => array( 'exception'=>0, 'return' => 0 ),
                        )),
//array( 'label'=>'TEST: CHostname'     , 'test'=>new \Foundation\Type\Complex\CHostname('domain.com') ),
array( 'expected'=>array( 'exception' => 0,
                            'isvalid' => array( 'exception'=>0, 'return' => FALSE ),
                           'getValue' => array( 'exception'=>0, 'return' => NULL ),
                         '__toString' => array( 'exception'=>0, 'return' => '' ),
                          'getLength' => array( 'exception'=>0, 'return' => 0 ),
                        )),
);