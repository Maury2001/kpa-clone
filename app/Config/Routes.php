<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('members', 'Menu::index');
$routes->get('roles','Menu::roles');
$routes->get('branches','Menu::branches');
$routes->get('designations','Menu::designations');
$routes->get('invoices','Menu::invoices');
$routes->get('mpesa','Menu::mpesa');
$routes->get('mpouch','Menu::mpouch');
$routes->get('products','Menu::products');
$routes->get('counties','Menu::counties');
$routes->get('specializations','Menu::specializations');
$routes->get('statuses','Menu::statuses');
$routes->get('receipts','Menu::receipts');
// $routes->get('roles','Menu::roles');