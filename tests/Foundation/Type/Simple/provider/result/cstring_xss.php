<?php
// 'Exception'=> 0:none, 1:PHPUnit_Framework_Error_Warning, 2:PHPUnit_Framework_Error_Notice, 3:\Exception
return [
//[ 'label'=>'TEST 01' , 'test'=>'<script>alert(document.URL);</script>' ],
    [ 'expected' => [ 'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '<script>alert(document.URL);</script>' ],
            '__toString' => [ 'exception' => 0, 'return'    => '<script>alert(document.URL);</script>' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 37 ],
            'exception'  => 0 ] ],
//[ 'label'=>'TEST 02' , 'test'=>'\';alert(String.fromCharCode(88,83,83))//\';alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//\";alert(String.fromCharCode(88,83,83))//--></SCRIPT>">\'><SCRIPT>alert(String.fromCharCode(88,83,83))</SCRIPT>' ],
    [ 'expected' => [ 'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '\';alert(String.fromCharCode(88,83,83))//\';alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//\";alert(String.fromCharCode(88,83,83))//--></SCRIPT>">\'><SCRIPT>alert(String.fromCharCode(88,83,83))</SCRIPT>' ],
            '__toString' => [ 'exception' => 0, 'return'    => '\';alert(String.fromCharCode(88,83,83))//\';alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//\";alert(String.fromCharCode(88,83,83))//--></SCRIPT>">\'><SCRIPT>alert(String.fromCharCode(88,83,83))</SCRIPT>' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 230 ],
            'exception'  => 0 ] ],
//[ 'label'=>'TEST 03' , 'test'=>'<SCRIPT SRC=http://ha.ckers.org/xss.js></SCRIPT>' ],
    [ 'expected' => [ 'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '<SCRIPT SRC=http://ha.ckers.org/xss.js></SCRIPT>' ],
            '__toString' => [ 'exception' => 0, 'return'    => '<SCRIPT SRC=http://ha.ckers.org/xss.js></SCRIPT>' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 48 ],
            'exception'  => 0 ] ],
//[ 'label'=>'TEST 04' , 'test'=>'<IMG SRC=%68%74%74%70%3A%2F%2F%77%77%77%2E%74%65%73%74%2D%70%62%72%61%69%64%65%72%73%2E%63%6F%6D%2F%69%6D%61%67%65%73%2F%70%62%72%6D%69%6E%2E%6A%70%67>' ],
    [ 'expected' => [ 'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '<IMG SRC=%68%74%74%70%3A%2F%2F%77%77%77%2E%74%65%73%74%2D%70%62%72%61%69%64%65%72%73%2E%63%6F%6D%2F%69%6D%61%67%65%73%2F%70%62%72%6D%69%6E%2E%6A%70%67>' ],
            '__toString' => [ 'exception' => 0, 'return'    => '<IMG SRC=%68%74%74%70%3A%2F%2F%77%77%77%2E%74%65%73%74%2D%70%62%72%61%69%64%65%72%73%2E%63%6F%6D%2F%69%6D%61%67%65%73%2F%70%62%72%6D%69%6E%2E%6A%70%67>' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 151 ],
            'exception'  => 0 ] ],
//[ 'label'=>'TEST 05' , 'test'=>'<IMG SRC=&#x68;&#x74;&#x74;&#x70;&#x3A;&#x2F;&#x2F;&#x77;&#x77;&#x77;&#x2E;&#x74;&#x65;&#x73;&#x74;&#x2D;&#x70;&#x62;&#x72;&#x61;&#x69;&#x64;&#x65;&#x72;&#x73;&#x2E;&#x63;&#x6F;&#x6D;&#x2F;&#x69;&#x6D;&#x61;&#x67;&#x65;&#x73;&#x2F;&#x70;&#x62;&#x72;&#x6D;&#x69;&#x6E;&#x2E;&#x6A;&#x70;&#x67;>' ],
    [ 'expected' => [ 'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '<IMG SRC=&#x68;&#x74;&#x74;&#x70;&#x3A;&#x2F;&#x2F;&#x77;&#x77;&#x77;&#x2E;&#x74;&#x65;&#x73;&#x74;&#x2D;&#x70;&#x62;&#x72;&#x61;&#x69;&#x64;&#x65;&#x72;&#x73;&#x2E;&#x63;&#x6F;&#x6D;&#x2F;&#x69;&#x6D;&#x61;&#x67;&#x65;&#x73;&#x2F;&#x70;&#x62;&#x72;&#x6D;&#x69;&#x6E;&#x2E;&#x6A;&#x70;&#x67;>' ],
            '__toString' => [ 'exception' => 0, 'return'    => '<IMG SRC=&#x68;&#x74;&#x74;&#x70;&#x3A;&#x2F;&#x2F;&#x77;&#x77;&#x77;&#x2E;&#x74;&#x65;&#x73;&#x74;&#x2D;&#x70;&#x62;&#x72;&#x61;&#x69;&#x64;&#x65;&#x72;&#x73;&#x2E;&#x63;&#x6F;&#x6D;&#x2F;&#x69;&#x6D;&#x61;&#x67;&#x65;&#x73;&#x2F;&#x70;&#x62;&#x72;&#x6D;&#x69;&#x6E;&#x2E;&#x6A;&#x70;&#x67;>' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 292 ],
            'exception'  => 0 ] ],
//[ 'label'=>'TEST 06' , 'test'=>"<BODY ONLOAD=alert('XSS')>" ],
    [ 'expected' => [ 'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => "<BODY ONLOAD=alert('XSS')>" ],
            '__toString' => [ 'exception' => 0, 'return'    => "<BODY ONLOAD=alert('XSS')>" ],
            'getLength'  => [ 'exception' => 0, 'return'    => 26 ],
            'exception'  => 0 ] ],
//[ 'label'=>'TEST 07' , 'test'=>'<IMG STYLE="xss:expr/*XSS*/ession(alert("XSS"))">' ],
    [ 'expected' => [ 'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '<IMG STYLE="xss:expr/*XSS*/ession(alert("XSS"))">' ],
            '__toString' => [ 'exception' => 0, 'return'    => '<IMG STYLE="xss:expr/*XSS*/ession(alert("XSS"))">' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 49 ],
            'exception'  => 0 ] ],
//[ 'label'=>'TEST 08' , 'test'=>"exp/*<A STYLE='no\xss:noxss('*//*');xss:&#101;x&#x2F;*XSS*//*/*/pression(alert('XSS'))'>" ],
    [ 'expected' => [ 'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => "exp/*<A STYLE='no\xss:noxss('*//*');xss:&#101;x&#x2F;*XSS*//*/*/pression(alert('XSS'))'>" ],
            '__toString' => [ 'exception' => 0, 'return'    => "exp/*<A STYLE='no\xss:noxss('*//*');xss:&#101;x&#x2F;*XSS*//*/*/pression(alert('XSS'))'>" ],
            'getLength'  => [ 'exception' => 0, 'return'    => 88 ],
            'exception'  => 0 ] ],
//[ 'label'=>'TEST 09' , 'test'=>'%3C%73%63%72%69%70%74%3E%61%6C%65%72%74%28%64%6F%63%75%6D%65%6E%74%2E%55%52%4C%29%3B%3C%2F%73%63%72%69%70%74%3E' ],
    [ 'expected' => [ 'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '%3C%73%63%72%69%70%74%3E%61%6C%65%72%74%28%64%6F%63%75%6D%65%6E%74%2E%55%52%4C%29%3B%3C%2F%73%63%72%69%70%74%3E' ],
            '__toString' => [ 'exception' => 0, 'return'    => '%3C%73%63%72%69%70%74%3E%61%6C%65%72%74%28%64%6F%63%75%6D%65%6E%74%2E%55%52%4C%29%3B%3C%2F%73%63%72%69%70%74%3E' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 111 ],
            'exception'  => 0 ] ],
//[ 'label'=>'TEST 10' , 'test'=>'&#x3C;&#x73;&#x63;&#x72;&#x69;&#x70;&#x74;&#x3E;&#x61;&#x6C;&#x65;&#x72;&#x74;&#x28;&#x64;&#x6F;&#x63;&#x75;&#x6D;&#x65;&#x6E;&#x74;&#x2E;&#x55;&#x52;&#x4C;&#x29;&#x3B;&#x3C;&#x2F;&#x73;&#x63;&#x72;&#x69;&#x70;&#x74;&#x3E;' ],
    [ 'expected' => [ 'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '&#x3C;&#x73;&#x63;&#x72;&#x69;&#x70;&#x74;&#x3E;&#x61;&#x6C;&#x65;&#x72;&#x74;&#x28;&#x64;&#x6F;&#x63;&#x75;&#x6D;&#x65;&#x6E;&#x74;&#x2E;&#x55;&#x52;&#x4C;&#x29;&#x3B;&#x3C;&#x2F;&#x73;&#x63;&#x72;&#x69;&#x70;&#x74;&#x3E;' ],
            '__toString' => [ 'exception' => 0, 'return'    => '&#x3C;&#x73;&#x63;&#x72;&#x69;&#x70;&#x74;&#x3E;&#x61;&#x6C;&#x65;&#x72;&#x74;&#x28;&#x64;&#x6F;&#x63;&#x75;&#x6D;&#x65;&#x6E;&#x74;&#x2E;&#x55;&#x52;&#x4C;&#x29;&#x3B;&#x3C;&#x2F;&#x73;&#x63;&#x72;&#x69;&#x70;&#x74;&#x3E;' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 222 ],
            'exception'  => 0 ] ],
//[ 'label'=>'TEST 11' , 'test'=>'&#60&#115&#99&#114&#105&#112&#116&#62&#97&#108&#101&#114&#116&#40&#100&#111&#99&#117&#109&#101&#110&#116&#46&#85&#82&#76&#41&#59&#60&#47&#115&#99&#114&#105&#112&#116&#62' ],
    [ 'expected' => [ 'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '&#60&#115&#99&#114&#105&#112&#116&#62&#97&#108&#101&#114&#116&#40&#100&#111&#99&#117&#109&#101&#110&#116&#46&#85&#82&#76&#41&#59&#60&#47&#115&#99&#114&#105&#112&#116&#62' ],
            '__toString' => [ 'exception' => 0, 'return'    => '&#60&#115&#99&#114&#105&#112&#116&#62&#97&#108&#101&#114&#116&#40&#100&#111&#99&#117&#109&#101&#110&#116&#46&#85&#82&#76&#41&#59&#60&#47&#115&#99&#114&#105&#112&#116&#62' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 169 ],
            'exception'  => 0 ] ],
//[ 'label'=>'TEST 12' , 'test'=>'PHNjcmlwdD5hbGVydChkb2N1bWVudC5VUkwpOzwvc2NyaXB0Pg==' ],
    [ 'expected' => [ 'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => 'PHNjcmlwdD5hbGVydChkb2N1bWVudC5VUkwpOzwvc2NyaXB0Pg==' ],
            '__toString' => [ 'exception' => 0, 'return'    => 'PHNjcmlwdD5hbGVydChkb2N1bWVudC5VUkwpOzwvc2NyaXB0Pg==' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 52 ],
            'exception'  => 0 ] ],
//[ 'label'=>'TEST 13' , 'test'=>"\x0A\x00" ],
    [ 'expected' => [ 'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => '' ],
            '__toString' => [ 'exception' => 0, 'return'    => '' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 0 ],
            'exception'  => 0 ] ],
//[ 'label'=>'TEST 14' , 'test'=>'cool'."\n".'raoul' ],
    [ 'expected' => [ 'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => 'cool' . "\n" . 'raoul' ],
            '__toString' => [ 'exception' => 0, 'return'    => 'cool' . "\n" . 'raoul' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 10 ],
            'exception'  => 0 ] ],
//[ 'label'=>'TEST 15' , 'test'=>'cool'."\0".'albert' )
    [ 'expected' => [ 'isvalid'    => [ 'exception' => 0, 'return'    => TRUE ],
            'getValue'   => [ 'exception' => 0, 'return'    => 'cool' . "\0" . 'albert' ],
            '__toString' => [ 'exception' => 0, 'return'    => 'cool' . "\0" . 'albert' ],
            'getLength'  => [ 'exception' => 0, 'return'    => 11 ],
            'exception'  => 0 ] ],
];