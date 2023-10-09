<?php
namespace App\Controllers;
Use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller{

    public function __construct (){
        helper(['form', 'url']);


    }
    public function create(){

        $dato['titulo']='Registrarse';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('front/carrusel_view');
        echo view('front/barra_social_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
        echo view('front/scripts_view');
    }
    public function formValidation(){
        $model = new usuario_Model();
        $input = $this->validate([
            'nombre'            =>  'required|min_length[4]',
            'apellido'          =>  'required|min_length[4]|max_length[25]',
            'email'             =>  'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'nombre_usuario'    =>  'required|min_length[4]|',
            'pass'              =>  'required|min_length[4]|max_length[15]',
            'confirmar_pass'    =>  'required|min_length[4]|max_length[15]'
            ]);

        $formModel = new usuario_Model();

        if  (!$input) {
            $data['titulo']='registro';
            echo view('front/head_view',$data);
            echo view('front/navbar_view');
            echo view('front/carrusel_view');
            echo view('front/barra_social_view');
            echo view('back/usuario/registro', ['validation' => $this->validator,'titulo' => 'Registro']);            
            echo view('front/footer_view');
            echo view('front/scripts_view');

        } else {
            $formModel->save([
            'nombre'            =>  $this->request->getVar('nombre'),
            'apellido'          =>  $this->request->getVar('apellido'),
            'email'             =>  $this->request->getVar('email'),
            'nombre_usuario'    =>  $this->request->getVar('nombre_usuario'),
            'pass'              =>  password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
            'confirmar_pass'    =>  $this->request->getVar('confirmar_pass')
            ]);

            session()->setFlashdata('success','Se ha registrado con éxito');
            return $this->response->redirect('registro');
        }
    }
} 