<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario_Model;

class Login_Controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        $dato['titulo'] = 'Login';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new Usuario_Model();

        // Se traen los datos del formulario
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        // Validación de datos
        if (!$email || !$password) {
            $session->setFlashdata('msg', 'Por favor, ingrese su correo electrónico y contraseña');
            return redirect()->to(base_url('login'));
        }

        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['pass'];
            $baja = $data['baja'];
            if ($baja == 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to(base_url('login'));
            }
            // Se verifican los datos ingresados para iniciar sesión
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                // Si se cumple la verificación, inicia la sesión
                $session->set($ses_data);

                $session->setFlashdata('msg', '¡Bienvenido!');
                return redirect()->to(base_url('panel'));
            } else {
                // No pasó la validación del password
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to(base_url('login'));
            }
        } else {
            $session->setFlashdata('msg', 'Correo electrónico no registrado');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('login'));
    }
}
