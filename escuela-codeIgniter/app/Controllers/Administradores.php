<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Administracion;
class Administradores extends Controller{

    public function index()
    {
        $administracion = new Administracion();
        $datos['administradores'] = $administracion->orderBy('id_admin', 'ASC')->findAll();

        return ($datos);
    }
}