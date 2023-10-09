<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;
use CodeIgniter\Session\Session;

class login_controller extends BaseController
{
    public function index()
    {
        helper(['form','url']);
        $session = session(); // Se debe inicializar la variable de sesión acá

        $dato['titulo']='Iniciar sesión';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('front/carrusel_view');
        echo view('front/barra_social_view');
        echo view('back/usuario/logeo', ['session' => $session]); // Aquí pasas la variable de sesión a la vista
        echo view('front/footer_view');
        echo view('front/scripts_view');
}
    
    public function auth()
    {
        $session = session();
        $model = new usuario_Model();

        $nombre_usuario = $this->request->getVar('nombre_usuario');
        $password = $this->request->getVar('pass');
        
        $data = $model->where('nombre_usuario',$nombre_usuario)->first();
        if ($data){
            $pass = $data['pass'];
            $ba = $data['baja'];
            if ($ba == 'SI'){
                $session->setFlashdata('msg','El usuario se ha dado de baja');
                return redirect()->to('/login_controller');
            }

            $verify_pass = password_verify($password, $pass);

                if($verify_pass){
                    $ses_data = [
                        'id_usuario' => $data['id_usuario'],
                        'nombre' => $data['nombre'],
                        'apellido' => $data['apellido'],
                        'email' => $data['email'],
                        'nombre_usuario' => $data['nombre_usuario'],
                        'perfil_id' => $data['perfil_id'],
                        'logged_in' => TRUE
                    ];
                    // Si se cumple la verificación, la sesión se inicia
                    $session->set($ses_data);
                    
                    session()->setFlashdata('msg', 'Has ingresado correctamente. Bienvenido');
                    return redirect()->to('/panel');
                }else{
                    //Acá es cuando no pasó la verificación de la
                    $session->setFlashdata('msg', 'La contraseña que ingresaste es incorrecta.');
                    return redirect()->to('/login_controller');
                }


        }else{
            $session->setFlashdata('msg', 'No existe el usuario o es incorrecto');
            return redirect()->to('/login_controller');
        }
    }

// Esta función se encarga de cerrar la sesión de usuario y redirigir al usuario a la página de inicio de sesión después de haber cerrado la sesión exitosamente.
public function logout()
{
    // Obtiene la instancia de la biblioteca de sesiones
    $session = session();

    // Configura un mensaje de despedida antes de destruir la sesión
    $session->setFlashdata('msg', '¡Gracias por usar nuestro servicio!. Que tengas un buen día. Hasta la próxima');

    // Destruye la sesión actual, eliminando todos los datos de sesión del usuario
    $session->destroy();

    // Redirige a la página de inicio de sesión
    return redirect()->to('/logeo');
}
}