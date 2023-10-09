<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Panel_controller extends Controller
{

    public function index()
    {
        $session = session();
        $nombre=$session->get('usuario');
        $perfil=$session->get('perfil_id');

        $data['perfil_id']=$perfil;

        $dato['titulo']='Panel del usuario';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('front/carrusel_view');
        echo view('front/barra_social_view');
        echo view('back/usuario/usuario_logueado', $data);['session' => $session];
        echo view('front/footer_view');
        echo view('front/scripts_view');
    }
}