# Debug Functions
[![Donate](https://www.wiauk.org/wp-content/uploads/2017/07/Donate-Box_goodwill.png)](https://www.paypal.me/ngocnam)

## Documentation

For documentation see 
[coxanh.net](https://coxanh.net) 

## Distribution repository

> Debug Functions provide some functions for easily debugging. And some useful functions: hr, br, color, startWith, endWith, ...

You can see code in `lib` folder.
+ debug.php
+ functions.php

## Explanation

|Function Name|Parametters|Return|Description|
|-----|-----|-----|-----|
|d|$data, $is_print_out, $is_html_encode|string: html code||
|dl|$data = NULL, $is_html_encode = true|string: html code||
|dd|$data = NULL, $is_html_encode = true|string: html code||
|dt|$message = NULL|string: html code||

## Sample:

### Functions of debug.php

```php
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

```

Debug Functions versions 1.0 is now on github.
