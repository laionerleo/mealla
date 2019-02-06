<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**/

$l                                        = '^(en|es|de|it|po)/';
$i                                        = '^(en|es|de|it|po)';

/**/


$route['default_controller']              = 'Welcome';
$route[$l.'main']                         = 'Welcome';
$route[$l.'personas-sendMessage']          = 'Personas/sendMessage';


/**/

$route[$l.'blank']                        = 'Welcome/blank';
$route[$l.'error403']                     = 'Welcome/error403';
$route[$l.'error404']                     = 'Welcome/error404';
$route[$l.'error503']                     = 'Welcome/error503';
$route[$l.'error504']                     = 'Welcome/error504';

/**/
/**/

$route[$l.'notificar']               = 'Notificar/index';

/**/

$route[$l.'sales']                     = 'Sales/sales_list';
$route[$l.'sales/(:num)']              = 'Sales/sales/$1/$2';
$route[$l.'sales-adddetail']           = 'Sales/sales_adddetail';
$route[$l.'sales-deldetail']           = 'Sales/sales_deldetail';

/**/

$route[$l.'purchases']                     = 'Purchases/purchases_list';
$route[$l.'purchases/(:num)']              = 'Purchases/purchases/$1/$2';
$route[$l.'purchases-adddetail']           = 'Purchases/purchases_adddetail';
$route[$l.'purchases-deldetail']           = 'Purchases/purchases_deldetail';

/**/

$route[$l.'product']                       = 'Warehouse/products';
$route[$l.'product/(:num)']                = 'Warehouse/product/$1/$2';

/**/

$route[$l.'customer']                     = 'Customer';
$route[$l.'customer/(:num)']              = 'Customer/customer/$1/$2';
$route[$l.'customer-savecontact']         = 'Customer/save_contact';
$route[$l.'customer-deletecontact']       = 'Customer/delete_contact';

/**/

$route[$l.'supplier']                     = 'Supplier';
$route[$l.'supplier/(:num)']              = 'Supplier/supplier/$1/$2';
$route[$l.'supplier-savecontact']         = 'Supplier/save_contact';
$route[$l.'supplier-deletecontact']       = 'Supplier/delete_contact';

/**/

$route[$l.'session']                     = 'Access';
$route[$l.'logout']                      = 'Access/logout';

/**/

$route[$l.'perfil']                     = 'User';
$route[$l.'user']                       = 'User/users';
$route[$l.'user/(:num)']                = 'User/user/$1/$2';
$route[$l.'user-settings']              = 'User/settings';

$route[$l.'user-access']                = 'User/user_access';
$route[$l.'user-psw']                   = 'User/user_psw';
$route[$l.'user-rpsw']                  = 'User/user_rpsw';

/**/



/**/

$route[$l.'(.+)$']                        = "$2";
$route[$i.'$']                            = $route['default_controller'];

/**/

$route['translate_uri_dashes']            = TRUE;
$route['404_override']                    = 'Welcome/error404';
$route['403_override']                    = 'Welcome/error403';
$route['503_override']                    = 'Welcome/error503';
$route['504_override']                    = 'Welcome/error504';
/**/

?>