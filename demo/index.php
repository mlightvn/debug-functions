<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require '../lib/debug.php';
require '../lib/functions.php';

dl("ARRAY");
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
);

dl($author);
hr('#ff0000');

dl("OBJECT");
$author = new stdClass();
$author->name           = 'Nguyen Nam';
$author->status         = 'Single';
$author->year_old       = 300;
$author->children       = new stdClass()
$author->children->amount       = 10;
$author->children->place        = 'outer space';
$author->father                 = array();
$author->mother                 = NULL;
$author->has_job                = FALSE;

dl($author);
hr('#ff0000');

dl("DEBUG AND DIE!!!");
dd("YOU CANNOT SEE NEXT OUTPUT AFTER THIS FUNCTION");
dl("DIED OR NOT???");

hr('#00AA00');

