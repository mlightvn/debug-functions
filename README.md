# Debug Functions
[![Donate](https://www.wiauk.org/wp-content/uploads/2017/07/Donate-Box_goodwill.png)](https://www.paypal.me/ngocnam)

## Distribution repository

> Debug Functions provide some functions for easily debugging. And some useful functions: hr, br, color, startWith, endWith, ...

## Require
You must include below file.

```php
require 'build/debug.phar';
```

## Explanation

### Debug Functions

|Function Name|Parametters|Return|Description|
|-----|-----|-----|-----|
|d|$data, $is_print_out, $is_html_encode|string: html code|analyse `$data` variable (object, array, string, number, boolean,...) and output its values. Similar to dd function of Laravel|
|dn|$data = NULL, $is_html_encode = true|string: html code|Same as `d`, but break the line.|
|dd|$data = NULL, $is_html_encode = true|string: html code|Same as `dn`, but do die/exit after printing.|
|dt|$message = NULL|string: html code|Same as `dn`, but output timestamp (by format [YYYY/MM/DD HH:MM:SS]) before message. For time checking|
|djson|$json = NULL, $isExited = false|*(None)*|Same as `dn`, but will be used to debug elements in a **json string**.|
|ddjson|$json = NULL|*(None)*|Same as `djson`, but it will do die/exit after printing.|

Parametters meaning:

|Parametter|Type|Default|Meaning|
|-----|-----|-----|-----|
|$data|(All)|NULL|Variable for debug/print-out on screen.|
|$is_print_out|boolean|true|Print out on screen.|
|$is_html_encode|boolean|true|Encode HTML code. Otherwise HTML code will available. E.g: `dl('<a href="https://coxanh.net">https://coxanh.net</a>', false);`, this code will show a link like this [https://coxanh.net](https://coxanh.net)|

### Other Functions
#### writeLog($message)
Default log folder is `/tmp/`, you can change it by this code. Add this code before include `functions.php`

```php
define("DEBUG_LOG_PATH", "/tmp/");
```

#### Other functions
+ hr($color = "#000000")
+ br
+ json($data)
+ startWith(string $haystack, string $needle)
+ endWith(string $haystack, string $needle)
+ color(string $text = '', string $color='#000000')
+ delete(string $path) : delete files on a folder by format.
+ toJpNengoDateTime(string $date, $hasTime = false) : Convert date to King (年号) Japanese Date Time.

## Sample:

```php
dn("ARRAY");
$author = array(
    'name'                  =>'Nguyen Nam',
    'status'                =>'Single',
    'year_old'              =>300,
    'children'              =>array(
        'amount'            => 10,
        'size'              => '100',
        'place'             => 'outer space',
    ),
    'father'                => array(),
    'mother'                => NULL,
    'brother'               => "NULL",
    'has_job'               => FALSE,
);

dn($author);
hr('#ff0000');

dn("Json string");
$author_json = json_encode($author);

dn($author_json);
dn("↓　\njson object");

djson($author_json);

hr('#ff0000');

dn("OBJECT");
$author = new stdClass();
$author->name                   = 'Nguyen Nam';
$author->status                 = 'Single';
$author->year_old               = 300;
$author->children               = new stdClass();
$author->children->amount       = 10;
$author->children->size         = '100';
$author->children->place        = 'outer space';
$author->father                 = array();
$author->mother                 = NULL;
$author->brother                = "NULL";
$author->has_job                = FALSE;
$author->birthday               = '1684/09/18 13:45:34';

dn($author);
hr('#ff0000');

dn("Json string");
$author_json = json_encode($author);

dn($author_json);
dn("↓　\njson object");

djson($author_json);

hr('#ff0000');

dn("DEBUG AND DIE!!!");
dd("YOU CANNOT SEE NEXT OUTPUT AFTER THIS FUNCTION");
dn("DIED OR NOT???");

hr('#00AA00');
```

Debug Functions versions 1.0 is now on github.
