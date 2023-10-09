<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Ruta para la página de inicio
$routes->get('principal', 'Home::index'); // Ruta alternativa para la página de inicio
$routes->get('productos', 'Home::productos'); // Ruta para la página de productos
$routes->get('quienes_somos', 'Home::quienes_somos'); // Ruta para la página "Quiénes Somos"
$routes->get('nuestra_historia', 'Home::nuestra_historia'); // Ruta para la página "Nuestra Historia"
$routes->get('nuestra_filosofia', 'Home::nuestra_filosofia'); // Ruta para la página "Nuestra Filosofía"
$routes->get('contactenos', 'Home::contactenos'); // Ruta para la página de contacto

// Rutas para el registro de usuarios
$routes->get('registro', 'usuario_controller::create'); // Ruta para mostrar el formulario de registro
$routes->post('registro', 'usuario_controller::formValidation'); // Ruta para validar el formulario de registro (POST)
$routes->post('enviar-form', 'usuario_controller::formValidation'); // Ruta alternativa para validar el formulario de registro (POST)
$routes->post('usuario_controller/formValidation', 'usuario_controller::formValidation'); // Ruta alternativa para validar el formulario de registro (POST)

// Rutas para el inicio de sesión
$routes->get('logeo', 'login_controller::index'); // Ruta para mostrar el formulario de inicio de sesión
$routes->post('enviarlogin', 'login_controller::auth'); // Ruta para autenticar el inicio de sesión (POST)
$routes->get('login_controller', 'login_controller::index'); // Ruta alternativa para mostrar el formulario de inicio de sesión
$routes->post('login_controller/auth', 'login_controller::auth'); // Ruta alternativa para autenticar el inicio de sesión (POST)

// Ruta para el Panel_controller
$routes->get('panel', 'Panel_controller::index', ['filter' => 'auth']); // Ruta para el panel de usuario

// Ruta para cerrar sesión
$routes->get('logout', 'login_controller::logout');