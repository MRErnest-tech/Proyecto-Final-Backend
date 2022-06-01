<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;
class Usuarios extends Controller{

    public function index()
    {
        $usuario = new Usuario();
        $datos['usuarios'] = $usuario->orderBy('id_usuario', 'ASC')->findAll();

        return ($datos);
    }
}