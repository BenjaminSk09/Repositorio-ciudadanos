<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('niveles','NivelesAcademicosController::index');
$routes->get('ciudadano','CiudadanosController::index');
$routes->get('region','RegionesController::index');
$routes->get('municipios','MunicipiosController::index');
$routes->get('departamentos','DepartamentosController::index');