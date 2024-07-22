<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public Function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->get('logged_in')){
            return redirect()->to('/login');
        }
    }
    public Function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
}