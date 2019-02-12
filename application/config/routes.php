<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**/

$l                                        = '^(en|es|de|it|po)/';
$i                                        = '^(en|es|de|it|po)';

/**/


$route['default_controller']              = 'Welcome';
$route[$l.'main']                         = 'Welcome';
$route[$l.'mandar']		                 = 'Welcome/mandarmensaje';


/**/

$route[$l.'blank']                        = 'Welcome/blank';
$route[$l.'error403']                     = 'Welcome/error403';
$route[$l.'error404']                     = 'Welcome/error404';
$route[$l.'error503']                     = 'Welcome/error503';
$route[$l.'error504']                     = 'Welcome/error504';

/**/

/**/



$route['404_override']                    = 'Welcome/error404';
$route['403_override']                    = 'Welcome/error403';
$route['503_override']                    = 'Welcome/error503';
$route['504_override']                    = 'Welcome/error504';
/**/

?>