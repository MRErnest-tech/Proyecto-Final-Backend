<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Rol;
class Roles extends Controller{

    public function index()
    {
        $rol = new Rol();
        $datos['roles'] = $rol->orderBy('id_rol', 'ASC')->findAll();

        return ($datos);
    }
}