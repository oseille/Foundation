<?php
// 'Exception'=> 0:none, 1:PHPUnit_Framework_Error_Warning, 2:PHPUnit_Framework_Error_Notice, 3:\Exception
return [
//[ 'label'=>'TEST: NULL',       'test'=>NULL ),
    [ 'expected' => [ 'fromextensionexception' => 3, 'fromfileexception'      => 3 ] ],
//[ 'label'=>'TEST: EMPTY',      'test'=>'' ),
    [ 'expected' => [ 'fromextensionexception' => 3, 'fromfileexception'      => 3 ] ],
//[ 'label'=>'TEST: DIRECTORY',  'test'=>APPLICATION_PATH . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR),
    [ 'expected' => [ 'fromextensionexception' => 3, 'fromfileexception'      => 3 ] ],
//[ 'label'=>'TEST: notadir',    'test'=>APPLICATION_PATH . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR . 'notadir' ),
    [ 'expected' => [ 'fromextensionexception' => 0, 'fromfileexception'      => 0 ] ],
//[ 'label'=>'TEST: source.php', 'test'=>APPLICATION_PATH . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR . 'source.php' ),
    [ 'expected' => [ 'fromextensionexception' => 0, 'fromfileexception'      => 0 ] ],
//[ 'label'=>'TEST: image.bmp',  'test'=>APPLICATION_PATH . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR . 'image.bmp' ),
    [ 'expected' => [ 'fromextensionexception' => 0, 'fromfileexception'      => 0 ] ],
//[ 'label'=>'TEST: image.gif',  'test'=>APPLICATION_PATH . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR . 'image.gif' ),
    [ 'expected' => [ 'fromextensionexception' => 0, 'fromfileexception'      => 0 ] ],
//[ 'label'=>'TEST: image.jpg',  'test'=>APPLICATION_PATH . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR . 'image.jpg' ),
    [ 'expected' => [ 'fromextensionexception' => 0, 'fromfileexception'      => 0 ] ],
//[ 'label'=>'TEST: image.png',  'test'=>APPLICATION_PATH . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR . 'image.png' ),
    [ 'expected' => [ 'fromextensionexception' => 0, 'fromfileexception'      => 0 ] ],
//[ 'label'=>'TEST: image',      'test'=>$sBuffer20121015 . DIRECTORY_SEPARATOR . 'image' ),
    [ 'expected' => [ 'fromextensionexception' => 0, 'fromfileexception'      => 0 ] ],
//[ 'label'=>'TEST: audio.mp3',  'test'=>$sBuffer20121015 . DIRECTORY_SEPARATOR . 'audio.mp3' ),
    [ 'expected' => [ 'fromextensionexception' => 0, 'fromfileexception'      => 0 ] ],
//[ 'label'=>'TEST: audio',      'test'=>$sBuffer20121015 . DIRECTORY_SEPARATOR . 'audio' ),
    [ 'expected' => [ 'fromextensionexception' => 0, 'fromfileexception'      => 0 ] ],
];
