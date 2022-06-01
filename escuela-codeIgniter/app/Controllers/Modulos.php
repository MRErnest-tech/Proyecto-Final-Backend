<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Modulo;
class Modulos extends Controller{
    public function index()
    {
        $modulo = new Modulo();
        $datos['modulos'] = $modulo->orderBy('id_modulo', 'ASC')->findAll();

        return ($datos);
    }
}