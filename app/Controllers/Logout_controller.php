<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Logout extends BaseController
{
    public function index()
    {
        $session = session();
        $session->destroy();
        
        // Configura un mensaje de despedida
        $session->setFlashdata('msg', '¡Gracias por usar nuestro servicio!. Que tengas un buen día. Hasta la próxima');

        // Redirige a la página de inicio de sesión
        return redirect()->to('/logeo');
    }
}
