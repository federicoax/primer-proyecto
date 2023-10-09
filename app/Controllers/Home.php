<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Mundo Lácteo';
        $this->cargarVistas($data, 'principal_ultimo');
    }

    public function productos()
    {
        $data['titulo'] = 'Productos';
        $this->cargarVistas($data, 'productos');
    }

    public function quienes_somos()
    {
        $data['titulo'] = '¿Quiénes somos?';
        $this->cargarVistas($data, 'quienes_somos');
    }

    public function nuestra_historia()
    {
        $data['titulo'] = 'Nuestra historia';
        $this->cargarVistas($data, 'nuestra_historia');
    }

    public function nuestra_filosofia()
    {
        $data['titulo'] = 'Nuestra filosofía';
        $this->cargarVistas($data, 'nuestra_filosofia');
    }

    public function contactenos()
    {
        $data['titulo'] = 'Contáctenos';
        $this->cargarVistas($data, 'contactenos');
    }

    public function registro()
    {
        $data['titulo'] = 'Registrarse';
        $this->cargarVistas($data, 'back/usuario/registro');
    }

    public function logeo()
    {
        $data['titulo'] = 'Iniciar sesión';
        $this->cargarVistas($data, 'back/usuario/logeo');
    }

    // Función privada para cargar las vistas comunes
    // La idea de crear esta funcion privada es una pequeña mejora para evitar duplicación de código. Esta función privada en el controlador se encarga de cargar las vistas comunes, y luego llamar a esta función (cargarVistas) desde las funciones públicas. Esto ayudaría a simplificar el código y hacerlo más mantenible en el tiempo.


    private function cargarVistas($data, $contenido)
    {
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/carrusel_view');
        echo view('front/barra_social_view');
        echo view('front/' . $contenido); // Aquí se carga la vista específica       
        echo view('front/footer_view');
        echo view('front/scripts_view');
    }
}