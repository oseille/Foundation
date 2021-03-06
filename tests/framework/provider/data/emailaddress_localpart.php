<?php
return [
// Non quoted valid
    [ 'label' => 'TEST: Abc', 'test'  => 'Abc' ],
    [ 'label' => 'TEST: Abc.123', 'test'  => 'Abc.123' ],
    [ 'label' => 'TEST: 123', 'test'  => '123' ],
    [ 'label' => 'TEST: 123-Abc', 'test'  => '123-Abc' ],
    [ 'label' => 'TEST: 12.-.Abc', 'test'  => '12.-.Abc' ],
    [ 'label' => 'TEST: user+mailbox', 'test'  => 'user+mailbox' ],
    [ 'label' => 'TEST: customer/department=shipping', 'test'  => 'customer/department=shipping' ],
    [ 'label' => 'TEST: user+mailbox/department=shipping', 'test'  => 'user+mailbox/department=shipping' ],
    [ 'label' => 'TEST: !#$%&\'*+-/=?^_`.{|}~', 'test'  => '!#$%&\'*+-/=?^_`.{|}~' ],
    [ 'label' => 'TEST: !def!xyz%abc', 'test'  => '!def!xyz%abc' ],
    [ 'label' => 'TEST: _somename', 'test'  => '_somename' ],
    [ 'label' => 'TEST: Abc.example.com', 'test'  => 'Abc.example.com' ],
    [ 'label' => 'TEST: Abc..123', 'test'  => 'Abc..123' ],
// Non quoted invalid
    [ 'label' => 'TEST: Abc@def', 'test'  => 'Abc@def' ],
    [ 'label' => 'TEST: Abc\@def', 'test'  => 'Abc\@def' ],
    [ 'label' => 'TEST: Fred Bloggs', 'test'  => 'Fred Bloggs' ],
    [ 'label' => 'TEST: Fred\ Bloggs', 'test'  => 'Fred\ Bloggs' ],
    [ 'label' => 'TEST: Joe.\\Blow', 'test'  => 'Joe.\\Blow' ],
    [ 'label' => 'TEST: Abc.', 'test'  => 'Abc.' ],
    [ 'label' => 'TEST: .Abc', 'test'  => '.Abc' ],
// Quoted valid
    [ 'label' => 'TEST: quoted Abc', 'test'  => '"Abc"' ],
    [ 'label' => 'TEST: quoted Abc.123', 'test'  => '"Abc.123"' ],
    [ 'label' => 'TEST: quoted 123', 'test'  => '"123"' ],
    [ 'label' => 'TEST: quoted 123-Abc', 'test'  => '"123-Abc"' ],
    [ 'label' => 'TEST: quoted 12.-.Abc', 'test'  => '"12.-.Abc"' ],
    [ 'label' => 'TEST: quoted user+mailbox', 'test'  => '"user+mailbox"' ],
    [ 'label' => 'TEST: quoted customer/department=shipping', 'test'  => '"customer/department=shipping"' ],
    [ 'label' => 'TEST: quoted user+mailbox/department=shipping', 'test'  => '"user+mailbox/department=shipping"' ],
    [ 'label' => 'TEST: quoted !#$%&\'*+-/=?^_`.{|}~', 'test'  => '"!#$%&\'*+-/=?^_`.{|}~"' ],
    [ 'label' => 'TEST: quoted !def!xyz%abc', 'test'  => '"!def!xyz%abc"' ],
    [ 'label' => 'TEST: quoted _somename', 'test'  => '"_somename"' ],
    [ 'label' => 'TEST: quoted Abc@def', 'test'  => '"Abc@def"' ],
    [ 'label' => 'TEST: quoted Abc\@def', 'test'  => '"Abc\@def"' ],
    [ 'label' => 'TEST: quoted Fred Bloggs', 'test'  => '"Fred Bloggs"' ],
    [ 'label' => 'TEST: quoted Fred\ Bloggs', 'test'  => '"Fred\ Bloggs"' ],
    [ 'label' => 'TEST: quoted Joe.\\Blow', 'test'  => '"Joe.\\Blow"' ],
    [ 'label' => 'TEST: quoted Abc.example.com', 'test'  => '"Abc.example.com"' ],
// Quoted invalid
    [ 'label' => 'TEST: quoted Abc..123', 'test'  => '"Abc..123"' ],
    [ 'label' => 'TEST: quoted Abc.', 'test'  => '"Abc."' ],
    [ 'label' => 'TEST: quoted .Abc', 'test'  => '".Abc"' ],
];
