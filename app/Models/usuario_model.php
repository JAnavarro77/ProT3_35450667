<?php
namespace App\Models;
use CodeIgniter\Model;

class Usuario_Model extends Model 
{
    protected $table = 'usuarios';
    protected $primarykey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'perfil_id', 'baja', 'created_at'];

}
