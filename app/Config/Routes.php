<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Menu;

/**
 * @var RouteCollection $routes
 */
$routes->match(['get', 'post'],'/', 'Home::index');
$routes->get('members', 'Menu::index');
$routes->get('roles', 'Menu::roles');
$routes->get('branches', 'Menu::branches');
$routes->get('designations', 'Menu::designations');
$routes->get('invoices', 'Menu::invoices');
$routes->get('mpesa', 'Menu::mpesa');
$routes->get('mpouch', 'Menu::mpouch');
$routes->get('products', 'Menu::products');
$routes->get('counties', 'Menu::counties');
//$routes->get('newcounty', 'Menu::newcounty');

$routes->get('statuses', 'Menu::statuses');
$routes->get('receipts', 'Menu::receipts');
// $routes->get('roles','Menu::roles');

$routes->match(['get', 'post'],'login', 'Auth::log');
$routes->match(['get', 'post'], 'register', 'Auth::reg');

$routes->get('newcounty', [Menu::class, 'new']); // Add this line
$routes->post('newcounty', [Menu::class, 'newcounty']);

$routes->get('specializations', 'Menu::specializations');
$routes->get('newspecializations', 'Menu::newspecializations');

