<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public Function before (RequestInterface $request, $arguments = null)
    {
        //si el usuario no esta logueado
        if(!session()->get('logged_in')){
            //redirige a la pagina del login
            return redirect()->to('/login');
        }
    }
    //------------------------------------
    public Function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
}