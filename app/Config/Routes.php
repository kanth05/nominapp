<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
// $routes->set404Override('App\Controllers\Home::destruirSesion');
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', [ 'as' => 'bienvenido']);
$routes->get('/creaUsuario', 'Home::creaUsuario');
$routes->get('/destruirSesion', 'Home::destruirSesion');
//empleados
$routes->get('/empleados', 'Empleado::index', [ 'as' => 'empleados']);
$routes->get('/empleadoEditar/(:any)', 'Empleado::empleado/$1', [ 'as' => 'empleadoEditar']);
$routes->get('/empleadoNuevo', 'Empleado::empleado', [ 'as' => 'empleadoNuevo']);
//Cargos
$routes->get('/cargos', 'CargoC::index', [ 'as' => 'cargos']);
$routes->get('/borrarCargo/(:any)', 'CargoC::borrarCargo/$1', [ 'as' => 'borrarCargo']);
//nomina
$routes->get('/nominas', 'Nomina::index', [ 'as' => 'nominas']);
$routes->get('/nominaTotal/(:num)', 'Nomina::nominaTotal/$1', [ 'as' => 'nominaTotal']);
$routes->get('/nominaDetal/(:num)', 'Nomina::nominaDetal/$1', [ 'as' => 'nominaDetal']);
$routes->get('/nominaNueva', 'Nomina::nueva', [ 'as' => 'nominaNueva']);
$routes->get('/borrarNomina/(:any)', 'Nomina::borrarNomina/$1', [ 'as' => 'borrarNomina']);
//complementos
$routes->get('/complementos', 'Tabulador::complementos', [ 'as' => 'complementos']);
$routes->get('/complementosOpcionales', 'Tabulador::complementosOpcionales', [ 'as' => 'complementosOpcionales']);
$routes->get('/borrarComplemento/(:any)', 'Tabulador::borrarComplemento/$1', [ 'as' => 'borrarComplemento']);
$routes->get('/altoNivel', 'Tabulador::tabAltoNivel', [ 'as' => 'altoNivel']);
$routes->get('/personalAdmin', 'Tabulador::tabPersonalAdmin', [ 'as' => 'personalAdmin']);
$routes->get('/personalObrero', 'Tabulador::tabPersonalOb', [ 'as' => 'personalObrero']);
$routes->get('/primaAntiguedad', 'Tabulador::primaAnt', [ 'as' => 'primaAntiguedad']);
$routes->get('/primaProfesion', 'PrimaProf::primaProfesion', [ 'as' => 'primaProfesion']);
//Login
$routes->get('/login', 'Home::login', [ 'as' => 'login']);
//Usuarios
$routes->get('/usuarios', 'UsuarioC::index', [ 'as' => 'usuarios']);
$routes->get('/usuario/(:any)', 'UsuarioC::usuario/$1', [ 'as' => 'usuario']);
$routes->get('/restablecerContrasena/(:any)', 'UsuarioC::restablecerContrasena/$1', [ 'as' => 'restablecerContrasena']);


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
