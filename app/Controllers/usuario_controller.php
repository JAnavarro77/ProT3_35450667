<?php
namespace App\Controllers;

use App\Models\Usuario_Model;
use CodeIgniter\Controller;

class Usuario_Controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create() 
    {
        $dato['titulo'] = 'Registro';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

    public function formValidation() 
    {
        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario'  => 'required|min_length[3]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass'     => 'required|min_length[3]|max_length[10]|regex_match[/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).+$/]'
        ],
        [
            'pass' => [
                'regex_match' => 'La contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número y un símbolo.'
            ]
        ]
    );

        $formModel = new Usuario_Model();

        if (!$input) 
        {
            $data['titulo'] = 'Registro';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro', ['validation' => $this->validator]);
            echo view('front/footer_view');
        }
        else 
        {
            $formModel->save([
                'nombre'   => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario'  => $this->request->getVar('usuario'),
                'email'    => $this->request->getVar('email'),
                'pass'     => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);

            session()->setFlashdata('success', 'Usuario registrado con éxito');
            return redirect()->to(base_url('/login')); // Redirige correctamente a la página de login
        }
    }
}
