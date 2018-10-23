<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require '../build/debug.phar';

dn("ARRAY");
$author = array(
    'name'                  =>'Nguyen Nam',
    'status'                =>'Single',
    'year_old'              =>300,
    'children'              =>array(
        'amount'            => 10,
        'place'             => 'outer space',
    ),
    'father'                => array(),
    'mother'                => NULL,
    'has_job'               => FALSE,
    'birthday'              => '1684/09/18 13:45:34',
);

dn($author);
hr('#ff0000');
dn("toJpNengoDateTime");
dn(toJpNengoDateTime($author['birthday']));
hr('#ff0000');


dn("OBJECT");
$author = new stdClass();
$author->name                   = 'Nguyen Nam';
$author->status                 = 'Single';
$author->year_old               = 300;
$author->children               = new stdClass();
$author->children->amount       = 10;
$author->children->place        = 'outer space';
$author->father                 = array();
$author->mother                 = NULL;
$author->has_job                = FALSE;
$author->birthday               = '1684/09/18 13:45:34';

dn($author);
hr('#ff0000');
dn("toJpNengoDateTime");
dn(toJpNengoDateTime($author->birthday));
hr('#ff0000');

dn("DEBUG AND DIE!!!");
dd("YOU CANNOT SEE NEXT OUTPUT AFTER THIS FUNCTION");
dn("DIED OR NOT???");

hr('#00AA00');
